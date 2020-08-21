<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_cashier')->nullable();
            $table->string('name_shopping')->nullable();
            $table->float('value')->nullable();            
            $table->integer('quantity')->nullable();
            $table->float('additional_apply')->nullable();
            $table->float('additional_embroidery')->nullable();
            $table->string('payment')->nullable();
            $table->string('phone')->nullable();
            $table->string('invoice_date')->nullable();
            $table->string('shopping_type')->nullable();
            $table->string('observation')->nullable();

            $table->foreign('id_cashier')->references('id')->on('cashiers');
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
        Schema::dropIfExists('shoppings');
    }
}
