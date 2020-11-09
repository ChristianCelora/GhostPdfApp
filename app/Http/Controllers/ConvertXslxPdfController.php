<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Celo\GhostPDF\GhostPDF;

class ConvertXslxPdfController extends ConverterPdfController {
    protected $view_name = "convert_xlsx";
    protected $name = "convert_pdf";
    protected $style_color = "green";
    protected $action_route = "core.convert.xlsx";
    protected $accepted_files = ".xls,.xslx";
}
