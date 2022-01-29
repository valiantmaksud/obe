<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_14_detailmarks', function (Blueprint $table) {
            $table->renameColumn('_11_cid', 'cid_11');
        });
        Schema::table('_11_offercourses', function (Blueprint $table) {
            $table->renameColumn('_11_cid', 'cid_11');
        });
        Schema::table('_12_markdistribution', function (Blueprint $table) {
            $table->renameColumn('_11_cid', 'cid_11');
        });
        Schema::table('_13_enrolledstudents', function (Blueprint $table) {
            $table->renameColumn('_11_cid', 'cid_11');
        });

        Schema::table('_15_graderesult', function (Blueprint $table) {
            $table->renameColumn('_11_cid', 'cid_11');
        });
        Schema::table('_18_pomarkdistribution', function (Blueprint $table) {
            $table->renameColumn('_11_cid', 'cid_11');
        });
        Schema::table('_20_poobtainedmarks', function (Blueprint $table) {
            $table->renameColumn('_11_cid', 'cid_11');
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
