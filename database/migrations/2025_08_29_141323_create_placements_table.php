<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('app_url');
            $table->string('app_id');
            $table->string('api_key');
            $table->string('payout_rate');
            $table->string('currency_name');
            $table->string('currency_logo');
            $table->string('generel_description');
            $table->string('postback_url');
            $table->string('postback_password');
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
        Schema::dropIfExists('placements');
    }
}
