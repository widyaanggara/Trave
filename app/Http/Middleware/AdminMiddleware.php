<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user has the 'admin' role
        if ($request->user() && $request->user()->role === 'admin') {
            return $next($request);
        }

        // Redirect non-admin users
        return redirect('/')->with('error', 'Access denied. Admins only.');
    }
}
