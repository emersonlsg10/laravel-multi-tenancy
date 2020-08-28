<?php

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 5) as $value) {
            Company::create([
                'comp_name' => "Company $value",
                'database' => "tenant_".Str::random(16),
                'prefix' => "company$value"
            ]);
        }
    }
}
