<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurePdfController extends PdfController {
    protected $view_name = "secure";
    protected $name = "secure_pdf";
    protected $style_color = "yellow";
    protected $action_route = "core.secure";

    public function execute(Request $request){
        dd($request);
    }
}
