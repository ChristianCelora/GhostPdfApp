<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SecureRequestValidator {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        // Log::debug([$request->file('file')->getMimeType(),$request->file('file')->getClientOriginalExtension()]);
        $validatedData = $request->validate([
            "password" => "required|string|max:255",
            "file" => "required|mimetypes:application/pdf",
        ]);
        Log::debug(get_class($this));
        return $next($request);
    }
}
