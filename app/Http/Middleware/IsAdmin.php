<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // validar que el usuario sea administrador 
        // y si no lo es, retornar a pagina de error

        try {
            if (auth()->user()) {
                if (auth()->user()->isAdmin()) {
                    return $next($request);
                } else {
                    abort(403);
                }
            } else {
                // No hay ningún usuario autenticado, redirecciona a la página de inicio de sesión
                return redirect()->route('login');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
