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
            $table->id();
            $table->unsignedBigInteger('_11_cid');
            $table->string('programcode');
            $table->string('semister');
            $table->string('year');
            $table->string('coursecode');
            $table->string('teacherid');
            $table->string('finalized_status');
            $table->string('status_11');
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
        Schema::dropIfExists('offer_courses');
    }
}
