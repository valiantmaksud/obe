<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_14_detailmarks', function (Blueprint $table) {
            $table->unsignedBigInteger('cid_11');
            $table->string('studentid',50);
            $table->string('examtype');
            $table->string('qid');
            $table->string('co');
            $table->string('po',50);
            $table->float('obtainedmark');
            $table->boolean('status_14');

            $table->foreign('cid_11')->references('cid_11')->on('_11_offercourses');
            $table->foreign('studentid')->references('studentid')->on('_07_student');
            $table->foreign('po')->references('po')->on('_06_po');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_marks');
    }
}
