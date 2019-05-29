<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public $auth;
    public function __construct(Guard $auth) //<-- ADD THE CONSTRUCT
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->role == 'user')
        {

            return Redirect::url('/');
        }
        return $next($request);
    }
}
