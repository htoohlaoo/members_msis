<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role  // role passed from route
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
        if (!Auth::check()) {
            // Not logged in
            return redirect('/login');
        }

        if (Auth::user()->role !== $role) {
            // Role does not match
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
