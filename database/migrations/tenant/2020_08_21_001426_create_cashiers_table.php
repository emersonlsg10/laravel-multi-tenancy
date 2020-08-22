<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->string('name_cashier')->nullable();
            $table->string('class')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('setor')->nullable();
            $table->string('person')->nullable();
            $table->float('value')->nullable();
            $table->string('description')->nullable();

            $table->foreign('id_user')->references('id_user')->on('tenant_users');
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
        Schema::dropIfExists('cashiers');
    }
}
