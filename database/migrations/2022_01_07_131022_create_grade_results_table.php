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
            $table->id();
            $table->unsignedBigInteger('_11_cid');
            $table->string('coursecode');
            $table->string('studentid');
            $table->string('attendance');
            $table->string('classperformanace');
            $table->decimal('midexam');
            $table->decimal('finalexam');
            $table->decimal('total');
            $table->string('grade');
            $table->string('status_15');
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
        Schema::dropIfExists('grade_results');
    }
}
