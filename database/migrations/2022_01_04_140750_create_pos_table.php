<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_06_po', function (Blueprint $table) {
            $table->string('po',50)->primary();
            $table->string('pokeywords');
            $table->string('programcode',50);
            $table->string('institutecode',50);
            $table->string('peo');
            $table->boolean('status_06');

            $table->foreign('programcode')->references('programcode')->on('_01_programs');
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
        Schema::dropIfExists('_06_po');
    }
}
