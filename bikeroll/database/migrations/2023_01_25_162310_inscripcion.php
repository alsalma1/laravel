<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inscripcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('inscripcion', function (Blueprint $table) {
        //     $table->unsignedInteger('id_inscripcion')->autoIncrement();
        //     $table->unsignedInteger('id_corredor');
        //     $table->unsignedInteger('id_carrera');
        //     $table->foreign('id_corredor')->references('id_corredor')->on('corredor');
        //     $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
        //     //$table->string('factura');
        //     $table->string('emailCuenta_paypal');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('inscripcion');
    }
}
