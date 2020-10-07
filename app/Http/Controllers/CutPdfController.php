<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Celo\GhostPDF\GhostPDF;

class CutPdfController extends PdfController {
    protected $view_name = "cut";
    protected $name = "cut_pdf";
    protected $style_color = "orange";
    protected $action_route = "core.cut";

    public function execute(Request $request){
        $ranges = $this->prepareRangesData($request);
        if(!empty($ranges)){
            $file = $request->file("file");
            $gs_pdf = new GhostPDF($file->path());
            $new_filename = self::CUT_PREFIX . pathinfo($file, PATHINFO_FILENAME);
            $gs_pdf->setOutputFilename($new_filename);
            $output = $gs_pdf->removePages($ranges);
            Storage::disk('public')->put($output, 'Contents');
            return array("file" => $new_filename, "name" => $file->getClientOriginalName());
        }
    }

    private function prepareRangesData(Request $request){
        $ranges = array();
        $pages_from = $request->input("pages_from");
        $pages_to = $request->input("pages_to");
        for($i = 0; $i < max(sizeof($pages_from), sizeof($pages_to)); $i++){
            if($pages_from[$i] && $pages_to[$i])
                $ranges[] = $pages_from[$i] . "-" . $pages_to[$i];
        }

        return $ranges;
    }
}
