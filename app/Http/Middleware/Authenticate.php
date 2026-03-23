<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\AuthenticationException;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {

        $guards = empty($guards) ? [null] : $guards;

        // Track if any guard is authenticated
        $authenticated = false;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Set the guard in use and mark as authenticated
                Auth::shouldUse($guard);
                $authenticated = true;
                break; // Exit loop once authenticated
            }
        }

        // If no guard authenticated, handle unauthenticated scenario
        if (!$authenticated) {
            $this->unauthenticated($request, $guards);
        }

        // Proceed with the request if authenticated
        return $next($request);
    }

    /**
     * Handle unauthenticated user.
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function unauthenticated(Request $request, array $guards): void
    {
        throw new AuthenticationException(
            'Unauthenticated.',
            $guards,
            $this->redirectTo($request, $guards)
        );
    }

    /**
     * Determine the login route based on the guards.
     */
    protected function redirectTo(Request $request, array $guards): ?string
    {
        if (in_array('super_admin', $guards)) {
            return route('super-admin.login');
        }

        if (in_array('admin', $guards)) {
            return route('admin.login');
        }

        // Default login route for general users
        return $request->expectsJson() ? null : route('login');
    }
}