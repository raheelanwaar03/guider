<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class branch
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role == 'branch') {
            return $next($request);
        } elseif (auth()->user()->role == 'admin') {
            return redirect()->route('Admin.Dashboard');
        } elseif (auth()->user()->role == 'user') {
            return redirect()->route('User.Dashboard');
        }

    }
}
