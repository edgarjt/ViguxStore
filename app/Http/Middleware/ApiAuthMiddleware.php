<?php

namespace App\Http\Middleware;

use App\Helpers\JwtAuth;
use Closure;

class ApiAuthMiddleware
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
        $token = $request->header('Authorization');
        $jwtAuth = new JwtAuth();
        $checkToken = $jwtAuth->checkToken($token);

        if ($checkToken) {
            return $next($request);
        }

        $data = [
            'status' => false,
            'message' => 'El usuario no esta identificado'
        ];

        return response()->json($data, 400);
    }
}
