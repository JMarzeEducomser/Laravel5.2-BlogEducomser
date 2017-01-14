<?php

namespace Blog\Http\Middleware;

use Closure;

// Para usar Auth::
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(!Auth::guest() && Auth::user()->admin){
            return $next($request);
        }

        abort(401);
    }
}
