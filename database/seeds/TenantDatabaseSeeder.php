<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

use App\Tenant\TenantFacade;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { //db:seed --database=company1
        $connection = \DB::getDefaultConnection();
        $company = Company::where('prefix', $connection)->first();
        TenantFacade::setTenant($company);
        $this->call(UserTenantsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
