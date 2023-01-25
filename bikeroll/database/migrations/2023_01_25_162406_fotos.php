<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('fotos', function (Blueprint $table) {
        //     $table->unsignedInteger('id_carrera');
        //     $table->foreign('id_carrera')->references('id_carrera')->on('carrera'); 
        //     $table->string('foto')->unique();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('fotos');
    }
}
