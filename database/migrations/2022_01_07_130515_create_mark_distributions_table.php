<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_12_markdistribution', function (Blueprint $table) {
            $table->string('cid_11');
            $table->decimal('markofexam');
            $table->string('qid');
            $table->string('co');
            $table->string('po',50);
            $table->integer('fullmark');

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
        Schema::dropIfExists('mark_distributions');
    }
}
