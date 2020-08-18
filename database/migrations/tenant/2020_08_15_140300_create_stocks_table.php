<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_material')->nullable();
            $table->string('quantity')->nullable();
            $table->string('description')->nullable();
            $table->string('payment_form')->nullable();
            $table->string('unit_value')->nullable();
            $table->string('stock_value')->nullable();

            $table->foreign('id_material')->references('id')->on('materials')->onDelete('cascade');;
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
        Schema::dropIfExists('stocks');
    }
}
