<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Celo\GhostPDF\ConverterFactory;

abstract class ConverterPdfController extends PdfController {
    public function execute(Request $request){
        Log::debug($request);
        $file = $request->file("file");
        $filename = pathinfo($file, PATHINFO_FILENAME);
        $client_filename = substr($file->getClientOriginalName(), 0, strrpos($file->getClientOriginalName(), ".")).".pdf";
        $converter = ConverterFactory::create($file->path(), ConverterFactory::PDF_CONVERTER, true);
        $output = $converter->convert();
        Storage::disk("public")->put($output, file_get_contents($output));
        return array(
            "file" => $filename, 
            "name" => $client_filename,
            "extension" => ".pdf"
        );
    }
}