<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('activities', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedBigInteger('user_id');
        $table->integer('pending_tasks')->default(0);
        $table->integer('completed_tasks')->default(0);
        $table->timestamps();
      });

      Schema::table('activities', function($table) {
        $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('activities');
    }
}
