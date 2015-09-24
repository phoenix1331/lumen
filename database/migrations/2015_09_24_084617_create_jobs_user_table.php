<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // Create table for associating roles to users (Many-to-Many)
          Schema::create('job_user', function (Blueprint $table) {
            $table->integer('job_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('job_id')->references('id')->on('jobs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['job_id', 'user_id']);
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
        Schema::drop('job_user');
    }
}

