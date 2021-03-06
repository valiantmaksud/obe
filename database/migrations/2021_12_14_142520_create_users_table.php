<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_02_users', function (Blueprint $table) {
            $table->string('userid',50)->primary();
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('usertype');
            $table->string('userrole');
            $table->string('usermail')->nullable();
            $table->string('deptcode',50);
            $table->string('institutecode',50);
            $table->boolean('status_02')->default(true);

            $table->foreign('deptcode')->references('deptcode')->on('_01_deptinfo');
            $table->foreign('institutecode')->references('institutecode')->on('_01_institute');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
