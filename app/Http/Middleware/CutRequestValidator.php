<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CutRequestValidator {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        $validatedData = $request->validate([
            "pages_from" => "required|array",
            "pages_to" => "required|array",
            "file" => "required|mimetypes:application/pdf",
        ]);
        return $next($request);
    }
}
