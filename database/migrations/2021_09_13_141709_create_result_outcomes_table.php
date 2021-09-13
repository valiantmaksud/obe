<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultOutcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_outcomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('result_id');
            $table->json('outcome_ids');
            $table->string('attendant')->nullable();
            $table->timestamps();

            $table->foreign('result_id')->references('id')->on('results');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_outcomes');
    }
}
