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
        Schema::table('customers', function (Blueprint $table) {
            $table->string('fullname')->nullable()->default(null)->change();
            $table->string('phone')->nullable()->default(null)->change();
            $table->string('address')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('fullname')->nullable(false)->default(null)->change();
            $table->string('phone')->nullable(false)->default(null)->change();
            $table->string('address')->nullable(false)->default(null)->change();
        });
    }
};
