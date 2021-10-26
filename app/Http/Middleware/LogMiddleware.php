<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogMiddleware
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
        if($request->session()->has("user") && $request->session()->get('user')->adminrole){
            return $next($request);
        }
        return redirect()->route("home")->with('loginmessage', 'You need to login first to access the page.');
       
    }
}
