<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Celo\GhostPDF\ConverterFactory;

class ConvertPdfDocxController extends PdfController {
    protected $view_name = "convert_to_docx";
    protected $name = "convert_docx_pdf";
    protected $style_color = "cyan";
    protected $action_route = "core.convert.to-docx";

    public function execute(Request $request){
        $file = $request->file("file");
        $filename = pathinfo($file, PATHINFO_FILENAME);
        $client_filename = substr($file->getClientOriginalName(), 0, strrpos($file->getClientOriginalName(), ".")).".docx";
        $converter = ConverterFactory::create($file->path(), ConverterFactory::DOCX_CONVERTER);
        $output = $converter->convert();
        Storage::disk("public")->put($output, file_get_contents($output));
        return array(
            "file" => $filename, 
            "name" => $client_filename,
            "extension" => ".docx"
        );
    }
}