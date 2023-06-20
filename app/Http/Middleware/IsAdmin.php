<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($user = \Sentinel::check()) {
            $isAdmin = false;
            if ($user->roles != null) {
                foreach($user->roles as $item) {
                    if ($item->slug === 'admin') {
                        $isAdmin = true;
                        break;
                    }
                }
            }

            if ($isAdmin) {
                return $next($request);
            }
        } 
        
        return redirect('/login');
    }
}
