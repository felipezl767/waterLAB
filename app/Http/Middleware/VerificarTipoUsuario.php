<?php

namespace App\Http\Middleware;

use Closure;

class VerificarTipoUsuario
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->tipo === 1) {
            // Usuario administrador
            // Realizar las acciones correspondientes
            // ...

            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
