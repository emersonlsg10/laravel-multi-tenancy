<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

use App\Tenant\TenantFacade;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            $url = TenantFacade::isTenantRequest() ?
                route('tenant.login', ['prefix' => \Request::route('prefix')]) :
                route('system.login');
            return $url;
        }
    }
}
