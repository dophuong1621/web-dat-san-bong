<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckLoggedU
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
        if ($request->session()->exists('MaU')) {
            //Nếu tồn tại session thì đi tiếp
            return Redirect::route('quan-ly-san-bong.index');
        } else {
            // Không tồn tại session thì quay về login
            return $next($request);
        }
    }
}
