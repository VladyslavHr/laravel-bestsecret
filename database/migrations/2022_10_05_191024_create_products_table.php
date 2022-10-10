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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title');
            $table->string('category')->nullable();
            $table->string('area')->nullable();
            $table->string('image_default')->nullable();
            $table->string('image_additional')->nullable();
            $table->string('sub_description')->nullable();
            $table->string('old_price')->nullable();
            $table->string('sale')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('products');
    }
};
