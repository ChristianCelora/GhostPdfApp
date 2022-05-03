<?php
namespace App\Http\Controllers;

class ConvertXslxPdfController extends ConverterPdfController {
    protected $view_name = "convert_xlsx";
    protected $name = "convert_pdf";
    protected $style_color = "green";
    protected $action_route = "core.convert.xlsx";
    protected $accepted_files = ".xls,.xslx";
}
