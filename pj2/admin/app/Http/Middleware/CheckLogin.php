<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckLogin
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
        if ($request->session()->exists('MaA')) {
            //Nếu tồn tại session thì đi tiếp
            return $next($request);
        } else {
            // Không tồn tại session thì quay về login
            return Redirect::route("login")->with('error', [
                "message" => '',
            ]);
        }
    }
}
