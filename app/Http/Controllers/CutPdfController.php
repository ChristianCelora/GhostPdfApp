<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CutPdfController extends PdfController {
    protected $view_name = "cut";
    protected $name = "cut_pdf";
    protected $style_color = "orange";
    protected $action_route = "core.cut";

    public function execute(Request $request){
        Log::debug($request);
    }
}
