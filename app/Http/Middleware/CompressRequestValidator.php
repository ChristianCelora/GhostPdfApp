<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CompressRequestValidator {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        $validatedData = $request->validate([
            "file" => "required|mimetypes:application/pdf",
        ]);
        return $next($request);
    }
}
