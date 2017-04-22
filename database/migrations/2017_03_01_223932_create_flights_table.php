<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('adults')->unsigned()->nullable();
            $table->tinyInteger('children')->unsigned()->nullable();
            $table->tinyInteger('infants')->unsigned()->nullable();
            $table->tinyInteger('stops')->unsigned()->nullable();
            $table->string('img_outbound');
            $table->string('img_inbound');
            $table->string('destinationplace');
            $table->string('originplace');
            $table->dateTime('salida_outbound');
            $table->dateTime('llegada_outbound');
            $table->dateTime('salida_inbound');
            $table->dateTime('llegada_inbound');
            $table->integer('total');
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
        Schema::dropIfExists('flights');
    }
}
