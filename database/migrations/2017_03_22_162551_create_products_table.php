<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tittle'); //url de la pagina
            $table->string('slug_url')->unique(); //url de la pagina
            $table->tinyInteger('days')->unsigned(); //titulo de la apgina h1
            $table->Integer('price_adults')->unsigned()->nullable();
            $table->Integer('price_children')->unsigned()->nullable();
            $table->tinyInteger('discount')->unsigned()->nullable()->default(0);
            $table->longText('itinerary')->nullable(); //contenido
            $table->mediumText('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->boolean('status')->default(true);
            $table->tinyInteger('type')->unsigned()->default(0); //0 packages, 1 activities, 2 hotels
            $table->string('local',5); //en or es
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
        Schema::dropIfExists('packages');
    }
}
