<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->float('unevenness',4,2);//desnivel
            $table->string('image');
            $table->integer('number_participants');
            $table->date('date');
            $table->time('time');
            $table->string('promotion');//link of the promotion poster
            $table->boolean('state');//if it's activated or not
            $table->float('price',4,2);
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
        Schema::dropIfExists('races');
    }
}