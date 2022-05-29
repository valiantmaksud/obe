<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_11_offercourses', function (Blueprint $table) {
            $table->id('cid_11')->autoIncrement();
            $table->string('programcode',50);
            $table->string('semister',50);
            $table->integer('year');
            $table->string('coursecode');
            $table->string('teacherid',50);
            $table->boolean('finalized_status');
            $table->boolean('status_11');

            $table->foreign('programcode')->references('programcode')->on('_01_programs');
            $table->foreign('semister')->references('semister')->on('_03_semisters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_courses');
    }
}
