<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
public function handle($request, Closure $next)
{
    if (session('access_role') !== 'admin') {
        abort(403);
    }

    return $next($request);
    }
}
