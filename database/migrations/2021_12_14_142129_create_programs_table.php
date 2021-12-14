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
            $table->id();
            $table->string('programcode');
            $table->string('programname');
            $table->string('deptcode');
            $table->string('deptname');
            $table->string('institutecode');
            $table->string('institutename');
            $table->string('status_01');
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
        Schema::dropIfExists('programs');
    }
}
