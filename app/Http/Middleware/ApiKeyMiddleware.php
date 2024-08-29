<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Obtén la API Key desde la cabecera de la solicitud
        $apiKey = $request->header('X-API-KEY');

         // Compara la API Key con la que tienes configurada
        if ($apiKey !== config('services.api.key')) {
            return response()->json(['message' => 'Acceso no autorizado'], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
