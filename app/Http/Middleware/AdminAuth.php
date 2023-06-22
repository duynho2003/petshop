<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Factory as Auth;


class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    private $auth;

    protected $guard = 'admin';

    public function __construct(Auth $auth){
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next)
    {
        $this->authenticate($request);
        return $next($request);
    }

    protected function authenticate($request)
    {
        if ($this->auth->guard($this->guard)->check()) {
            $this->auth->shouldUse($this->guard);
            return;
        }

        $this->unauthenticated($request);
    }

    protected function unauthenticated($request)
    {
        throw new AuthenticationException('Unauthenticated.', [$this->guard], $this->redirectTo($request));
    }

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('admin.login');
        }
    }
}
