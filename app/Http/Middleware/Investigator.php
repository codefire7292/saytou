<?php

namespace App\Http\Middleware;

use Closure;

class Investigator
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
        $user = $request->user();

        if ($user && $user->role === 'enqueteur') {
            return $next($request);
        }

        return redirect()->route('investigator_index');
    }
}