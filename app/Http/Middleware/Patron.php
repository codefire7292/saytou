<?php

namespace App\Http\Middleware;

use Closure;

class Patron
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

        if ($user && $user->role === 'commanditaire') {
            return $next($request);
        }

        return redirect()->route('patron_index');
    }
}