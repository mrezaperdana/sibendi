<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Check if the response is a BinaryFileResponse
        if ($response instanceof BinaryFileResponse) {
            return $response;
        }

        // Set headers for non-binary file responses
        return $response->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                        ->header('Pragma', 'no-cache')
                        ->header('Expires', 'Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
