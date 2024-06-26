<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RoleRedirect
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
        Log::info('RoleRedirect middleware called');

        if (Auth::check()) {
            $user = Auth::user();
            Log::info('User role:', ['role' => $user->role]);

            if ($user->role == 'admin') {
                Log::info('Redirecting to dashboard-admin');
                return redirect()->route('dashboard-admin');
            } else {
                Log::info('Redirecting to home');
                return redirect()->route('home-user');
            }
        }

        return $next($request);
    }
}
