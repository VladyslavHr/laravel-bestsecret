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
        Schema::create('chart_size_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->bigInteger('chart_size_gender_id')->unsigned();
            $table->string('img')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('description_a')->nullable();
            $table->text('description_b')->nullable();
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
        Schema::dropIfExists('chart_size_categories');
    }
};
