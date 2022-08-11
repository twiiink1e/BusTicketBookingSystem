<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('origin_province_id');
            $table->unsignedBigInteger('destination_province_id');
            $table->date('dep_date');
            $table->time('dep_time');
            $table->time('arrival_time');
            $table->unsignedBigInteger('bus_id');
            $table->float('price', 8, 2);
            $table->timestamps();
            
            $table->foreign('origin_province_id')->references('id')->on('provinces');
            $table->foreign('destination_province_id')->references('id')->on('provinces');
            $table->foreign('bus_id')->references('id')->on('buses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
};
