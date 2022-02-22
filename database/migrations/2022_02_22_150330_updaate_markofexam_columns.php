<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdaateMarkofexamColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_12_markdistribution', function (Blueprint $table) {
            $table->string('markofexam')->change();
        });

        Schema::table('_14_detailmarks', function (Blueprint $table) {
            $table->decimal('fullmark')->nullable();
        });

        // Schema::table('_12_markdistribution', function (Blueprint $table) {
        //     $table->string('markofexam')->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
