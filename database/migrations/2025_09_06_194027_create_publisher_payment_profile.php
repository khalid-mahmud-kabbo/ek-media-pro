<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublisherPaymentProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('publishers_payment_profile', function (Blueprint $table) {
            $table->id();
            $table->string('payment_method_id');
            $table->string('pub_id');
            $table->string('app_id');
            $table->string('payment_address');
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
        Schema::dropIfExists('publisher_payment_profile');
    }
}
