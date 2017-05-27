<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug_url')->unique();; //url de la pagina
            $table->string('name'); //nombre de la pagina
            $table->string('tittle'); //titulo de la apgina h1
            $table->longText('body')->nullable(); //contenido
            $table->mediumText('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('menu')->default(true);
            $table->tinyInteger('menu_order')->unsigned()->default(200);
            $table->string('local',5);
            $table->string('img')->nullable();
            $table->boolean('tipo')->default(false); // false = a pagina y true a componentes
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
        Schema::dropIfExists('pages');
    }
}
