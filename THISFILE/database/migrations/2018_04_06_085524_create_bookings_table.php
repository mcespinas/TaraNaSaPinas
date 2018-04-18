<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('book_status', 20);
            $table->double('book_price', 8, 2);
            $table->date('book_start');
            $table->date('book_end');
            $table->integer('book_pax');
            $table->string('book_fname', 50);
            $table->string('book_lname', 50);
            $table->string('book_email', 100);
            $table->string('book_contact', 11);
            $table->integer('deal_id');
            $table->integer('agency_id');
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
        Schema::dropIfExists('bookings');
    }
}
