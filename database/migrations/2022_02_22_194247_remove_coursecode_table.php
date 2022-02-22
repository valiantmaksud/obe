<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCoursecodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_15_graderesult', function (Blueprint $table) {
            $table->dropColumn(['coursecode']);
        });

        Schema::table('_20_poobtainedmarks', function (Blueprint $table) {
            $table->dropColumn(['coursecode']);
        });
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
