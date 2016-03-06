<?php

namespace App\Http\Middleware;

use Closure;
use \Auth;
class AdminCheck
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
        if (Auth::check() && Auth::user()->admin)
            return $next($request);
        abort(403,'Không thể vào mục này!');
    }
}
