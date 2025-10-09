<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('pub_id')->unique();
            $table->string('offer_id')->unique();
            $table->string('app_id')->unique();
            $table->string('offer_name');
            $table->string('user_id');
            $table->string('payout');
            $table->string('ip_address');
            $table->string('status');
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
        Schema::dropIfExists('reports');
    }
}
