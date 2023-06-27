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
        Schema::create('chart_sizes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chart_size_category_id')->unsigned();
            $table->bigInteger('chart_size_gender_id')->unsigned();
            $table->bigInteger('chart_size_guide_id')->unsigned();
            $table->bigInteger('chart_size_defenition_id')->unsigned();
            $table->string('size')->nullable();
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
        Schema::dropIfExists('chart_sizes');
    }
};
