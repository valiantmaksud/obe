<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_13_enrolledstudents', function (Blueprint $table) {
            $table->string('cid_11');
            $table->string('studentid',50);
            $table->string('enrolltype');
            $table->boolean('status_13');

            $table->foreign('cid_11')->references('cid_11')->on('_11_offercourses');
            $table->foreign('studentid')->references('studentid')->on('_07_student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enroll_students');
    }
}
