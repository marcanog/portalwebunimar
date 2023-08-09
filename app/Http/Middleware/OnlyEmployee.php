<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class OnlyEmployee
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
        if(Auth::user()->is_employee()) return $next($request);
        return redirect('/admin');
    }
}
