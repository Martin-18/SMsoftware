<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Si no está logueado en la sesión, redirigir al login
        if (!$request->session()->has('admin_logged_in')) {
            return redirect('/admin-login');
        }
        return $next($request);
    }
}