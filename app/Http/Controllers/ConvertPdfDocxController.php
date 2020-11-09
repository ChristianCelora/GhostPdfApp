<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Celo\GhostPDF\ConverterFactory;

class ConvertPdfDocxController extends PdfController {
    protected $view_name = "convert_to_docx";
    protected $name = "convert_docx_pdf";
    protected $style_color = "cyan";
    protected $action_route = "core.convert.to-docx";

    public function execute(Request $request){
        Log::debug($request);
    }
}