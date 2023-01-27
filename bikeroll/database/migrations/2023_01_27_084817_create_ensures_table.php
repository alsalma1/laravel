<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnsuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ensures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_race');
            $table->unsignedBigInteger('id_runner');
            $table->integer('price');

            //Foreign keys
            $table->foreign('id_runner')->references('id')->on('runners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ensures');
    }
}
