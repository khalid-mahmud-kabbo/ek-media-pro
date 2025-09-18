<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();

            $table->string('offer_id')->unique();
            $table->string('name');
            $table->string('image_url')->nullable();
            $table->text('click_url');

            $table->json('categories')->nullable();
            $table->json('country_code')->nullable();
            $table->json('devices')->nullable();
            $table->json('platforms')->nullable();
            $table->json('os')->nullable();

            $table->string('android_os_version_min')->nullable();
            $table->string('android_os_version_max')->nullable();
            $table->string('ios_os_version_min')->nullable();
            $table->string('ios_os_version_max')->nullable();

            $table->text('description1')->nullable();
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();

            $table->decimal('payout', 10, 2)->default(0);

            $table->json('events')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
