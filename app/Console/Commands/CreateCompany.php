<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Tenant\TenantFacade;

class CreateCompany extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'tenant:create {--ids= : Ids of tenants to create structure}';
    protected $signature = 'company:create {comp_id}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new tenants';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $ids = explode(",", $this->option('comp_id'));//1,2,3
        $ids = $this->argument('comp_id');
        $company = Company::where('comp_id', $ids)->first();
        
        DB::statement("CREATE DATABASE {$company->database};");
        TenantFacade::loadConnections();
        $this->call('migrate', [
            '--database' => $company->prefix, //conexao company1
            '--path' => 'database/migrations/tenant',
            '--seed'
        ]);

        $this->call('db:seed', [
            '--database' => $company->prefix,
            '--class' => 'TenantDatabaseSeeder'
        ]);

        if (!$company->count()) {
            $this->error('Ids of tenant not found in table.');
        }
    }
}
