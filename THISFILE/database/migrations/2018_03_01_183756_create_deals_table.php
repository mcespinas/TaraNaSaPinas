<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('deal_location', 255);
            $table->double('deal_price', 6, 2);
            $table->date('deal_sellstartdate')->nullable();
            $table->date('deal_sellenddate')->nullable();
            $table->date('deal_startdate');
            $table->date('deal_enddate');
            $table->string('deal_inclusions', 255);
            $table->string('deal_exclusions', 255);
            $table->integer('deal_rating');
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
        Schema::dropIfExists('deals');
    }
}