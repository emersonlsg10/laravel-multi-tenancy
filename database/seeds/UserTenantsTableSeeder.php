<?php

use App\Models\UserTenant;
use Illuminate\Database\Seeder;

use App\Tenant\TenantFacade;

class UserTenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = TenantFacade::getTenant();
        factory(UserTenant::class)->create([
            'email' => "user1@{$company->prefix}.com"
        ]);
    }
}
