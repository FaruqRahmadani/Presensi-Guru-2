<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminSekolahMiddleware
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle($request, Closure $next)
  {
    if (Auth::User()->IsAdminSekolah) return $next($request);
    return abort('404');
  }
}
