<?php

namespace App\Http\Middleware;

use Closure;

class Organization
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
        if(Auth()->user()->is_system_account == 0){
            return $next($request);
        }
        return redirect('/admin')->with('error','You have not organization access');

    }
}
