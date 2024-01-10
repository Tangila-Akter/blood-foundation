<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class FoundationAuthenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('foundation.login');
        }
    }


    protected function authenticate($request, array $guards)
    {
       
        if ($this->auth->guard('foundation')->check()) {
            return $this->auth->shouldUse('foundation');
        }
        
        $this->unauthenticated($request, ['foundation']);
    }
}