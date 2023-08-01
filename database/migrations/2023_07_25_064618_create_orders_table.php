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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numeric_series')->nullable();
            $table->bigInteger('payment_id')->nullable();
            $table->double('total_price');
            $table->string('payment_status')->default('created');
            $table->integer('product_quantity');
            $table->string('delivery_status')->default('preparing');
            $table->string('delivery_track')->nullable();
            $table->string('firm')->nullable();
            $table->integer('identification_num')->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('street');
            $table->string('add_address')->nullable();
            $table->integer('post_code');
            $table->string('city');
            $table->string('firm_bill')->nullable();
            $table->integer('identification_num_bill')->nullable();
            $table->string('name_bill')->nullable();
            $table->string('last_name_bill')->nullable();
            $table->string('email_bill')->nullable();
            $table->string('phone_bill')->nullable();
            $table->string('street_bill')->nullable();
            $table->string('add_address_bill')->nullable();
            $table->integer('post_code_bill')->nullable();
            $table->string('city_bill')->nullable();
            $table->tinyInteger('refund')->nullable();
            $table->longText('status_response')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
