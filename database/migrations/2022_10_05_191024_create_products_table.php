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
            $table->string('code');
            $table->string('title');
            $table->string('category')->nullable();
            $table->string('store_category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('area')->nullable();
            $table->string('image_default')->nullable();
            $table->string('image_additional')->nullable();
            $table->longText('description')->nullable();
            $table->longText('color')->nullable();
            $table->longText('size')->nullable();
            $table->integer('amount')->nullable();
            $table->string('sub_description')->nullable();
            $table->double('old_price', 10, 2)->nullable();
            $table->integer('sale')->nullable();
            $table->double('price', 10, 2)->nullable();
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
