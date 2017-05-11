<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
            $table->string('days')->nullable(); //duracion de la actividad
            $table->Integer('price_adults')->unsigned()->nullable()->default(0);
            $table->Integer('price_children')->unsigned()->nullable()->default(0);
            $table->tinyInteger('discount')->unsigned()->nullable()->default(0);
            $table->longText('itinerary')->nullable(); //contenido
            $table->mediumText('include')->nullable(); //price include
            $table->mediumText('suggestion')->nullable(); //price include
            $table->mediumText('meta_description')->nullable();
            $table->longText('description')->nullable(); // descripcion del sitio de la actividad <mientras tanto>
            $table->longText('short_description')->nullable(); // descripcion del sitio de la actividad <mientras tanto>
            $table->string('keywords')->nullable();
            $table->boolean('status')->default(true);
            $table->tinyInteger('type')->unsigned()->default(0); //0 packages, 1 activities, 2 hotels
            $table->string('local',5); //en or es
            $table->string('address')->nullable(); //ubicacion de la actividad
            $table->integer('city_id')->unsigned()->nullable(); //ubicacion de la actividad
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
        Schema::dropIfExists('products');
    }
}
