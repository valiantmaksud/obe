<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_01_programs', function (Blueprint $table) {
            $table->string('programcode')->primary();
            $table->string('programname');
            $table->string('deptcode');
            $table->string('institutecode');
            $table->string('status_01');

            $table->foreign('deptcode')->references('deptcode')->on('_01_deptinfo');
            $table->foreign('institutecode')->references('institutecode')->on('_01_institute');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
