<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoObtainedMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_20_poobtainedmarks', function (Blueprint $table) {
            $table->string('cid_11');
            $table->string('coursecode');
            $table->string('studentid');
            $table->string('po');
            $table->decimal('obtainedmark');
            $table->decimal('pototalmark');
            $table->string('obtainedpercentage');
            $table->boolean('status_20');

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
        Schema::dropIfExists('po_obtained_marks');
    }
}
