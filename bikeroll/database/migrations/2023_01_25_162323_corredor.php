<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Corredor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredor', function (Blueprint $table) {
            $table->unsignedInteger('id_corredor');
            $table->string('nombre');
            $table->string('apellido');
            $table->text('direccion');
            $table->date('fecha_nacimiento');
            $table->boolean('sexo');
            $table->boolean('pro');
            $table->string('numero_federado');
            $table->integer('puntos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corredor');
    }
}
