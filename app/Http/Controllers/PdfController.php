<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class PdfController extends Controller{
    const COMPRESSED_PREFIX = "c";
    const CUT_PREFIX = "x";
    /** @var string $view_name view code */
    protected $view_name = "";
    /** @var string $style_color view primary style color */
    protected $style_color = "";
    /** @var string $action_route form action route */
    protected $action_route = "";
    /** @var string $accepted_files dropzone form accepted files. 
     * For override dropzone.js doc for valid values 
     * https://www.dropzonejs.com/#configuration
     * */
    protected $accepted_files = ".pdf";
    /**
     * Perform operation
     */
    public abstract function execute(Request $request);
    /**
     * Display the view
     */
    public function show(){
        return view(
            $this->view_name, 
            [
                "form_action" => $this->action_route, 
                "color" => $this->style_color,
                "accepted_files" => $this->accepted_files
            ]
        );
    }
    /**
     * Download the file
     * @param string $file      saved filename in storage
     * @param string $filename  real filename to be downloaded
     * @param string $extension extension of file in storage
     */
    public function download(string $file, string $filename, string $extension){
        $headers = array("Content-Type" => "application/pdf");
        $file_path = storage_path('app/public')."/tmp/".$file."".$extension;
        return response()->download($file_path, $filename, $headers);
    }
}
