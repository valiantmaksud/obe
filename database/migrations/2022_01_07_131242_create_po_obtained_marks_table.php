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
            $table->id();
            $table->unsignedBigInteger('_11_cid');
            $table->string('coursecode');
            $table->string('studentid');
            $table->string('po');
            $table->decimal('obtainedmark');
            $table->decimal('pototalmark');
            $table->string('obtainedpercentage');
            $table->string('status_20');
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
        Schema::dropIfExists('po_obtained_marks');
    }
}
