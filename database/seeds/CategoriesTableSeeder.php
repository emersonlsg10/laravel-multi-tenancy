<?php

use Illuminate\Database\Seeder;

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
        $company = TenantFacade::getTenant();
        factory(\App\Models\Category::class, 10)
            ->make()
            ->each(function($category) use($company){
                $category->name = $category->name . ' ' . $company->prefix;
                $category->save();
            });
    }
}
