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
            $table->id();
            $table->string('po');
            $table->string('pokeywords');
            $table->string('programcode');
            $table->string('institutecode');
            $table->string('peo');
            $table->string('status_06');
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
        Schema::dropIfExists('_06_po');
    }
}
