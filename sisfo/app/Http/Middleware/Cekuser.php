<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use Redirect;
use Illuminate\Http\Request;


class Cekuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // if(in_array($request->user()->role,$levels)){
        //     return $next($request);
        // }return redirect('/');
        
        // if(Auth::user()->role!='Admin'){
        //     return redirect('/admin');
        // }else if(Auth::user()->role!='Guru'){
        //     return redirect('/teacher');
        // }else if(Auth::user()->role!='Murid'){
        //     return redirect('/murid');
        // }else{
        //     return redirect('/login');
        // };

        if($request->user()){
            return $next($request);
        }return redirect('/');
    }
}
