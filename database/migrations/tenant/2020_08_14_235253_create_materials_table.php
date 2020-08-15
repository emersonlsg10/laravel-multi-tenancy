<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_provider')->nullable();
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->string('color')->nullable();
            $table->string('measure')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('size')->nullable();

            $table->foreign('id_provider')->references('id')->on('providers');
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
        Schema::dropIfExists('materials');
    }
}
