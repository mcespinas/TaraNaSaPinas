<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('agency_status', 20);
            $table->string('agency_name', 50);
            $table->string('agency_address', 255);
            $table->string('agency_contact', 20);
            $table->string('agency_email', 100);
            $table->string('agency_permit');
            $table->mediumText('agency_info');
            $table->string('agency_url');
            $table->double('agency_rating', 3, 2);
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
        Schema::dropIfExists('agencies');
    }
}
