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
        Schema::create('roads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('origin_province_id');
            $table->unsignedBigInteger('destination_province_id');
            $table->foreign('origin_province_id')->references('id')->on('provinces');
            $table->foreign('destination_province_id')->references('id')->on('provinces');

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
        Schema::dropIfExists('roads');
    }
};
