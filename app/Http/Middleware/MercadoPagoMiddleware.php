<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Response;

class MercadoPagoMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->get('key') != env('MP_WEBHOOK_KEY')) {
            throw new Exception('Invalid Token', Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
