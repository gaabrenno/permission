<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChecKPermission
{
    public function handle(Request $request, Closure $next, string $permission)
    {
        abort_unless($request->user()->can($permission), Response::HTTP_FORBIDDEN);
        return $next($request);
    }
}
