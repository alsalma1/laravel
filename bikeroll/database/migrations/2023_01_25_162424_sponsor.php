<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sponsor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('sponsor', function (Blueprint $table) {
        //     $table->unsignedInteger('id_sponsor')->autoIncrement();
        //     $table->string('nombre');
        //     $table->text('direccion');
        //     $table->string('logo');
        //     $table->boolean('plana_principal');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('sponsor');
    }
}
