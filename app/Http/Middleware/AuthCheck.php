<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Jika belum login
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'Silakan login dulu.');
        }

        // Jika sudah login
        return $next($request);
    }
}
