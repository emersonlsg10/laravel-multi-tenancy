<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use App\Tenant\TenantFacade;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $guard = TenantFacade::isTenantRequest() ? 'tenant' : 'system';
        if (Auth::guard($guard)->check()) {
            return $guard == 'tenant'?
                redirect()->route('tenant.home', ['prefix' => \Request::route('prefix')]):
                redirect()->to('/system/home');
        }

        return $next($request);
    }
}
