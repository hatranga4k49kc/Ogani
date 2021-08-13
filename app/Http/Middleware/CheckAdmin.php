<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckAdmin
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
//        return $next($request);
//        if(Auth::guard('webadmin')
//            ->attempt($request->only(['email', 'password'])))
//        {
//            return redirect()->route('backend.index');
//
//        }
//
//        return redirect()->route('backend.admin.login');

        if (Auth::guard('webadmin')->guest()){
            return redirect()->route('backend.admin.login');
        }
        return  $next($request);


    }
}
