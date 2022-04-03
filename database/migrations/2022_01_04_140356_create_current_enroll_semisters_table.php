<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentEnrollSemistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_04_currentenrollsemester', function (Blueprint $table) {
            $table->string('institutecode',50);
            $table->string('programcode',50);
            $table->string('semister',50);
            $table->integer('year');

            $table->foreign('institutecode')->references('institutecode')->on('_01_institute');
            $table->foreign('programcode')->references('programcode')->on('_01_programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_04_currentenrollsemester');
    }
}
