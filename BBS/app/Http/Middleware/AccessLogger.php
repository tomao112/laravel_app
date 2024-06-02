<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AccessLogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('access start', [
            'method' => $request->method(),
            'url' => $request->url()
        ]);

        $response = $next($request);

        Log::info('access end', [
            'method' => $request->method(),
            'url' => $request->url()
        ]);

        return $response;
    }
}
