<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurePdfController extends PdfController {
    protected $name = "secure_pdf";
    protected $action_route = "core.secure";
}
