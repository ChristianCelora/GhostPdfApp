<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompressPdfController extends PdfController {
    protected $view_name = "compress";
    protected $name = "compress_pdf";
    protected $style_color = "red";
    protected $action_route = "core.compress";

    public function execute(Request $request){
        if ($request->hasFile("file")) {
            $file = $request->file("file");
            Log::debug("file uploaded ".$file->path());
        }
    }
}
