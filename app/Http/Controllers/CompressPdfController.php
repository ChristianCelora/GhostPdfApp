<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Celo\GhostPDF\GhostPDF;

class CompressPdfController extends PdfController {
    protected $view_name = "compress";
    protected $name = "compress_pdf";
    protected $style_color = "red";
    protected $action_route = "core.compress";

    public function execute(Request $request){
        // Log::debug($request);
        $file = $request->file("file");
        $gs_pdf = new GhostPDF($file->path());
        $new_filename = self::COMPRESSED_PREFIX . pathinfo($file, PATHINFO_FILENAME);
        $gs_pdf->setOutputFilename($new_filename);
        $compression = (($request->has("compression_type"))) ? ($request->input("compression_type")) : false;
        $output = $gs_pdf->compress($compression);
        Storage::disk('public')->put($output, 'Contents');
        return array("file" => $new_filename, "name" => $file->getClientOriginalName(), "extension" => ".pdf");
    }
}
