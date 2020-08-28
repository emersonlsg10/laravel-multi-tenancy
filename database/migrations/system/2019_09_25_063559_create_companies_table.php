<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->uuid('id');
            $table->bigIncrements('comp_id');
            $table->string('comp_name');
            $table->string('comp_document')->nullable();
            $table->string('comp_currency')->nullable();
            $table->string('comp_country')->nullable();
            $table->string('comp_address')->nullable();
            $table->string('comp_phone')->nullable();
            $table->string('comp_whatsapp')->nullable();
            $table->string('comp_email')->unique()->nullable();
            $table->string('comp_username')->unique()->nullable();
            $table->string('comp_password')->nullable();
            $table->string('comp_language')->nullable();
            $table->string('comp_plan')->nullable();
            $table->date('comp_payed_at')->nullable();
            $table->enum('comp_status', [1, 2, 3]);
            $table->string('database')->unique()->nullable();
            $table->string('prefix')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
