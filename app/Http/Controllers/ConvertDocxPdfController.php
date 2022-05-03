<?php
namespace App\Http\Controllers;

class ConvertDocxPdfController extends ConverterPdfController {
    protected $view_name = "convert_docx";
    protected $name = "convert_pdf";
    protected $style_color = "blue";
    protected $action_route = "core.convert.docx";
    protected $accepted_files = ".doc,.docx";
}
