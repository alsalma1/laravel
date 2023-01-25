<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SponsorCarrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('sponsor_carrera', function (Blueprint $table) {
        //     $table->unsignedInteger('id_sponsor');
        //     $table->unsignedInteger('id_carrera');
        //     $table->double('precio', 8, 2);
        //     //Foreign key
        //     $table->foreign('id_sponsor')->references('id_sponsor')->on('sponsor');
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
        //Schema::dropIfExists('sponsor_carrera');
    }
}
