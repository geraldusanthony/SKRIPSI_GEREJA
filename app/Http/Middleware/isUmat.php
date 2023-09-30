<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isUmat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::user() &&  \Auth::user()->role_id == 2) {
            return $next($request);
        }
        return back()->with('error','Opps, You\'re not Umat');
    }
}
