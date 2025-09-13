<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostbackDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postback_docs', function (Blueprint $table) {
            $table->id();
            $table->string('description_one')->nullable();;
            $table->string('important_notice')->nullable();;
            $table->string('expected_response')->nullable();;
            $table->string('code_example')->nullable();;
            $table->json('paramiters_and_description')->nullable();
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
        Schema::dropIfExists('postback_docs');
    }
}
