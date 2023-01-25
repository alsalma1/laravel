<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera', function (Blueprint $table) {
            $table->unsignedInteger('id_carrera');
            $table->text('descripcion');
            $table->integer('desnivel');
            $table->string('imagen_mapa');
            $table->integer('numero_participantes');
            $table->double('km', 8, 2);
            $table->string('punto_salida');
            $table->date('fecha');
            $table->time('hora');
            $table->string('cartel_promocion');
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera');
    }
}
