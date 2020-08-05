<?php

namespace App\Providers;

use App\Models\Company;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use App\Tenant\TenantFacade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        TenantFacade::loadConnections();
    }
}
