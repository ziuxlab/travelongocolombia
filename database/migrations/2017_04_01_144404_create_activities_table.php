<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tittle');
            $table->mediumText('description');
            $table->string('duration'); // example: 2 hours
            $table->string('slug_url')->unique();
            $table->Integer('price_adults')->unsigned()->nullable();
            $table->Integer('price_children')->unsigned()->nullable();
            $table->tinyInteger('discount')->unsigned()->default(0);
            $table->longText('itinerary')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->boolean('status')->default(true);
            $table->tinyInteger('type')->unsigned()->default(1);
            $table->string('local', 5);
            $table->softDeletes();
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
        Schema::dropIfExists('activities');
    }
}
