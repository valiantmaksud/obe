<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSemesterName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_04_currentenrollsemester', function (Blueprint $table) {
            if (Schema::hasColumn('_04_currentenrollsemester', 'semister')) {
                $table->renameColumn('semister', 'semester');
            }
        });
        Schema::table('_05_currentmarkentrysemester', function (Blueprint $table) {
            if (Schema::hasColumn('_05_currentmarkentrysemester', 'semister')) {
                $table->renameColumn('semister', 'semester');
            }
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
