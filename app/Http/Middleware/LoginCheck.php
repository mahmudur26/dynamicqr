<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginCheck
{
    public function handle(Request $request, Closure $next)
    {
        if(!Session()->has('login_id'))
            return redirect('login')->with('message' , 'You have to login first');
        return $next($request);
    }
}
