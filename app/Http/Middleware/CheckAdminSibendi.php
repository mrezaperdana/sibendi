<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdminSibendi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and is an admin of Sibendi
        if (Auth::check() && Auth::user()->IsAdminSibendi == 1) {
            return $next($request);
        }

        // Redirect if not an admin
        return redirect('/')->withErrors('You do not have access to this page.');
    }
}
