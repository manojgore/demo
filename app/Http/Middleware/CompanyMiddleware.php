<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if a company is authenticated
        if (auth()->check() && auth()->user()->usertype == 'company') {
            return $next($request);
        }

        // Redirect to the company login page
        return redirect()->route('showcompany.login');
    }
}
