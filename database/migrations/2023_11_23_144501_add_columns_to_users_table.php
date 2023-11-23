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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('street')->nullable();
            $table->string('add_address')->nullable();
            $table->integer('post_code')->nullable();
            $table->string('city')->nullable();
            $table->string('firm')->nullable();
            $table->string('identification_num')->nullable();
            $table->string('firm_bill')->nullable();
            $table->string('identification_num_bill')->nullable();
            $table->string('name_bill')->nullable();
            $table->string('last_name_bill')->nullable();
            $table->string('email_bill')->nullable();
            $table->string('phone_bill')->nullable();
            $table->string('street_bill')->nullable();
            $table->string('add_address_bill')->nullable();
            $table->integer('post_code_bill')->nullable();
            $table->string('city_bill')->nullable();
            $table->string('client_status')->nullable();
            $table->tinyInteger('admin')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('phone');
            $table->dropColumn('street');
            $table->dropColumn('add_address');
            $table->dropColumn('post_code');
            $table->dropColumn('city');
            $table->dropColumn('firm');
            $table->dropColumn('identification_num');
            $table->dropColumn('firm_bill');
            $table->dropColumn('identification_num_bill');
            $table->dropColumn('name_bill');
            $table->dropColumn('last_name_bill');
            $table->dropColumn('email_bill');
            $table->dropColumn('phone_bill');
            $table->dropColumn('street_bill');
            $table->dropColumn('add_address_bill');
            $table->dropColumn('post_code_bill');
            $table->dropColumn('city_bill');
            $table->dropColumn('client_status');
        });
    }
};
