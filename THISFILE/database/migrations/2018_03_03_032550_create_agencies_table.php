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
            $table->string('agency_address', 255)->nullable();
            $table->string('agency_contact', 13)->nullable();
            $table->string('agency_email', 100)->nullable();
            $table->string('agency_permit')->nullable();
            $table->string('agency_info', 100)->nullable();
            $table->string('agency_url', 255)->nullable();;
            $table->integer('agency_rating');
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
