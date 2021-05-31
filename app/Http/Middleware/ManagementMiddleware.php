<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ManagementMiddleware
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
        $uga = $request->session()->get('user_access');
        if($uga != 'management'){
            if($uga == 'member' || $uga == 'admin'){
                return redirect('home');
            }
            return redirect('logout');
        }
        return $next($request);
    }
}
