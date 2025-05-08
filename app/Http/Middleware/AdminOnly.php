<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOnly
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->email !== 'escribeuncorreo@gmail.com') { //cambia por un correo que consideres
            abort(403, 'Acceso no autorizado.');
        }

        return $next($request);
    }
}
