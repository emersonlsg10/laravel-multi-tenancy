<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_service')->nullable();
            $table->float('value')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('budget_footage')->nullable();
            $table->float('additional_apply')->nullable();
            $table->float('additional_embroidery')->nullable();
            $table->string('payment_budget')->nullable();
            $table->string('budget_invoice')->nullable();
            $table->string('budget_type')->nullable();
            $table->string('phone')->nullable();
            $table->string('observation')->nullable();

            $table->foreign('id_service')->references('id')->on('services');
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
        Schema::dropIfExists('budgets');
    }
}
