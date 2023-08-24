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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->string('product_code');
            $table->string('product_title');
            $table->bigInteger('product_sizeId');
            $table->string('product_link');
            $table->double('product_sum');
            $table->double('product_new_sale');
            $table->double('product_new_sum');
            $table->integer('product_count');
            $table->double('product_old_price');
            $table->double('product_sale');
            $table->double('product_price');
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
        Schema::dropIfExists('order_items');
    }
};
