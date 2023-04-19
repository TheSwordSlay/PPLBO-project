<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Session()->has('loginId')) {
            return redirect('login')->with('fail', 'Page tersebut hanya bisa diakses oleh admin');
        } else {
            $user = Session::get('data')->name;
            if (!($user == 'Admin')) {
                return redirect('login')->with('fail', 'Page tersebut hanya bisa diakses oleh admin');
            }
        }
        return $next($request);
    }
}
