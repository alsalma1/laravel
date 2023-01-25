<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AseguradoraCarrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('aseguradora_carrera', function (Blueprint $table) {
        //     $table->id('id_aseguradora');
        //     $table->id('id_carrera');
        //     $table->double('precio', 8, 2);
        //     //Foreign key
        //     $table->foreign('id_aseguradora')->references('id_aseguradora')->on('aseguradora');
        //     $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('aseguradora_carrera');
    }
}
