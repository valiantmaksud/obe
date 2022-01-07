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
            $table->id();
            $table->unsignedBigInteger('_11_cid');
            $table->decimal('markofexam');
            $table->string('qid');
            $table->string('co');
            $table->string('po');
            $table->decimal('fullmark');
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
        Schema::dropIfExists('mark_distributions');
    }
}
