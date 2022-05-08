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
            $table->string('coursecode')->nullable();
            $table->string('studentid',50);
            $table->float('attendance');
            $table->float('classperformanace');
            $table->float('midexam');
            $table->float('finalexam');
            $table->float('total');
            $table->string('grade',4);
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
