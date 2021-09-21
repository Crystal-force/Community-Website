<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HtmlMifier
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
        if(!Auth::check() || Auth::user()->is_admin != '1'){
 
            return redirect()->route('home');
        }
        return $next($request);
    }
}
