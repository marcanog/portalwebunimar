<?php

namespace App\Http\Middleware;

use Closure;
use Hash;

class PortalUnimarAccessKeyApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $apiKey = $request->headers->get('Portalunimar-Api-Key');
        if(!Hash::check(env('PORTALUNIMAR_API_KEY'), $apiKey)){
            return response()->json(['message' => 'Acceso denegado']);
        }
        return $next($request);
    }
}
