<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreatePaymentsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('payments', function (Blueprint $table) {
                $table->increments('id');
                $table->float('value')
                      ->defaul(0)
                ;
                $table->enum('status', ['accept', 'decline', 'pending']);
                $table->string('stripe')
                      ->nullable()
                ;
                $table->integer('booking_id')
                      ->unsigned()
                      ->nullable()
                ;
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
            Schema::dropIfExists('payments');
        }
    }
