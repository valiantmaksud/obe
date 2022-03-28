<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_15_graderesult', function (Blueprint $table) {
            $table->string('cid_11');
            $table->string('coursecode');
            $table->string('studentid');
            $table->string('attendance');
            $table->string('classperformanace');
            $table->decimal('midexam');
            $table->decimal('finalexam');
            $table->decimal('total');
            $table->string('grade');
            $table->boolean('status_15');

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
        Schema::dropIfExists('grade_results');
    }
}
