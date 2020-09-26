<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Log;
// use Illuminate\Support\Facades\Storage;
use Celo\GhostPDF\GhostPDF;

class CompressPdfController extends PdfController {
    protected $view_name = "compress";
    protected $name = "compress_pdf";
    protected $style_color = "red";
    protected $action_route = "core.compress";

    public function execute(Request $request){
        if ($request->hasFile("file")) {
            $file = $request->file("file");
            Log::debug("file uploaded ".$file->path());
            $gs_pdf = new GhostPDF($file->path());
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $new_filename = self::COMPRESSED_PREFIX.$filename;
            $gs_pdf->setOutputFilename($new_filename);
            $output = $gs_pdf->compress();
            Log::debug("output ".$output);
            // Storage::move($new_filename, 'new/file.jpg');
            $headers = array("Content-Type" =>"application/pdf");
            return array("file" => $new_filename, "name" => $file->getClientOriginalName());
        }
        return array();
    }
}
