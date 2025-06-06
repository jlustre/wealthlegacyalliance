<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EditorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      if (Auth::check() && (Auth::user()->isMentor || Auth::user()->isAdmin)) {
        return $next($request);
      }
      return redirect()->route('home')->with('error', 'Unauthorized mentor access.');
    }

    protected $routeMiddleware = [
        'mentor' => \App\Http\Middleware\MentorMiddleware::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
}
