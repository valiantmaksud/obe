<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoMarkDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_18_pomarkdistribution', function (Blueprint $table) {
            $table->unsignedBigInteger('cid_11');
            $table->string('po',4);
            $table->float('pototalmark');

            $table->foreign('cid_11')->references('cid_11')->on('_11_offercourses');
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
        Schema::dropIfExists('po_mark_distributions');
    }
}
