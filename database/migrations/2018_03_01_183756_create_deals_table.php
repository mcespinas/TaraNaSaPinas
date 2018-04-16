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
            $table->increments('id');
            $table->string('deal_name', 50);
            $table->string('deal_location', 50);
            $table->double('deal_price', 8, 2);
            $table->date('deal_sellstartdate');
            $table->date('deal_sellenddate');
            $table->date('deal_travelstartdate');
            $table->date('deal_travelenddate');
            $table->mediumText('deal_highlights');
            $table->mediumText('deal_inclusions');
            $table->mediumText('deal_exclusions');
            $table->mediumText('deal_itinerary');
            $table->double('deal_rating', 3, 2);
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