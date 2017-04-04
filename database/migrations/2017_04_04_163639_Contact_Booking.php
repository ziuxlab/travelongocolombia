<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contact_id')->unsigned()->index();
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->integer('booking_id')->unsigned()->index();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
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
        Schema::dropIfExists('contact_booking');
    }
}
