<?php

namespace App\Http\Middleware;

use Closure;

class SystemAdmin
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
        if(isset(Auth()->user()->is_system_account)) {
            if (Auth()->user()->is_system_account == 1) {
                return $next($request);
            }
        }
        return redirect('/organization')->with('error','You have not admin access');
    }
}
