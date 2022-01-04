<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentMarkEntrySemistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_05_currentmarkentrysemester', function (Blueprint $table) {
            $table->id();
            $table->string('institutecode');
            $table->string('programcode');
            $table->string('semester');
            $table->string('year');
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
        Schema::dropIfExists('_05_currentmarkentrysemester');
    }
}
