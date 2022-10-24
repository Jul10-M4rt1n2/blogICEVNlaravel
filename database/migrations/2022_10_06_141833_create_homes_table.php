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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('section2_title')->nullable();
            $table->longText('section2_description')->nullable();
            $table->string('image2')->nullable();
            $table->string('section3_title')->nullable();
            $table->string('section3_sub_title')->nullable();
            $table->string('section3_title_card1')->nullable();
            $table->longText('section3_description_card1')->nullable();
            $table->string('section3_title_card2')->nullable();
            $table->longText('section3_description_card2')->nullable();
            $table->string('section3_title_card3')->nullable();
            $table->longText('section3_description_card3')->nullable();
            $table->string('section4_title')->nullable();
            $table->longText('section4_description')->nullable();
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
        Schema::dropIfExists('homes');
    }
};
