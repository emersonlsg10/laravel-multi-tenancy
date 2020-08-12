<?php

use Illuminate\Database\Seeder;
use App\Models\Collaborator;
use App\Tenant\TenantFacade;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Collaborator::class)->create([
            'service' => 'teste'
        ]);
    }
}
