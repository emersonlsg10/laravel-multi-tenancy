<?php

namespace App\Http\Middleware;

use App\Models\Company;
use Closure;

use App\Tenant\TenantFacade;

class TenantConnection
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $prefix = $request->route('prefix');
        $company = null;
        if ($prefix) {
            $company = Company::where('prefix', $prefix)->first();
            if ($company) {
                TenantFacade::setTenant($company);
            }
        }
        if(TenantFacade::isTenantRequest() && !$company){
            abort(403, 'Tenant not found');
        }
        return $next($request);
    }
}
