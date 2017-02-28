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
            $table->string('slug_url'); //url de la pagina
            $table->string('name'); //nombre de la pagina
            $table->string('tittle'); //titulo de la apgina h1
            $table->longText('body'); //contenido
            $table->string('meta_description');
            $table->string('keywords');
            $table->boolean('status')->default(true);
            $table->boolean('menu')->default(true);
            $table->tinyInteger('menu_order')->unsigned()->default(200);
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
