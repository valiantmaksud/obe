<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_07_student', function (Blueprint $table) {
            $table->string('studentid')->primary();
            $table->string('studentname');
            $table->string('batch');
            $table->string('programcode');
            $table->string('deptcode');
            $table->string('institutecode');
            $table->boolean('status_07');

            $table->foreign('programcode')->references('programcode')->on('_01_programs');
            $table->foreign('deptcode')->references('deptcode')->on('_01_deptinfo');
            $table->foreign('institutecode')->references('institutecode')->on('_01_institute');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_07_student');
    }
}
