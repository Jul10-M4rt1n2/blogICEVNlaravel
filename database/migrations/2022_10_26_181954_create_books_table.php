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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('pdf')->nullable();
            $table->longText('summary')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });

        //php artisan make:controller /painel/BookController --resource
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
