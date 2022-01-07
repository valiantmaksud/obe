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
            $table->id();
            $table->unsignedBigInteger('_11_cid');
            $table->string('studentid');
            $table->string('enrolltype');
            $table->string('status_13');
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
        Schema::dropIfExists('enroll_students');
    }
}
