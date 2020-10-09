<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Celo\GhostPDF\GhostPDF;

class SecurePdfController extends PdfController {
    protected $view_name = "secure";
    protected $name = "secure_pdf";
    protected $style_color = "yellow";
    protected $action_route = "core.secure";

    public function execute(Request $request){
        Log::debug(storage_path('app/public'));
        if ($request->hasFile("file") && $request->has("password")) {
            $file = $request->file("file");
            $gs_pdf = new GhostPDF($file->path());
            $new_filename = pathinfo($file, PATHINFO_FILENAME);
            $gs_pdf->setOutputFilename($new_filename);
            $output = $gs_pdf->secure($request->input("password"));
            Storage::disk("public")->put($output, file_get_contents($output));
            return array(
                "file" => $new_filename, 
                "name" => $file->getClientOriginalName(), 
                "extension" => ".pdf"
            );
        }
        return array();
    }
}
