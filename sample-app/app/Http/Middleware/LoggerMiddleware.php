<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Route;

class LoggerMiddleware
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
        $log = session('log', []);
        $routeName = Route::getCurrentRoute()->getName();
        $log[] = [Carbon::now(), $routeName];
        session(['log' => $log]);

        return $next($request);
    }
}
