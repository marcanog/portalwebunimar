<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class OnlyContent
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
        if(Auth::user()->is_content()) return $next($request);
        return redirect('/admin');
    }
}
