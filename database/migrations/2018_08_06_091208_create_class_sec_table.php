<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_sec', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('class_model_id')->unsigned();
            $table->foreign('class_model_id')->references('id')->on('class_models');

            $table->integer('sec_model_id')->unsigned();
            $table->foreign('sec_model_id')->references('id')->on('sec_models');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_sec');
    }
}
