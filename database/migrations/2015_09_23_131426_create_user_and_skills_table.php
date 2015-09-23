<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAndSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('users', function(Blueprint $table){
          $table->increments('id');
          $table->string('name', 32);
          $table->string('photo', 120);
          $table->string('username', 32);
          $table->string('email', 320);
          $table->string('password', 64);
          $table->string('remember_token', 100)->nullable();
          $table->longText('profile_copy');
          $table->timestamps();
      });

         Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('skill_name');
            $table->timestamps();
        });

          Schema::create('skill_user', function (Blueprint $table) {
            $table->integer('skill_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('skill_id')->references('id')->on('skills')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['skill_id', 'user_id']);
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
      Schema::drop('skill_user');
      Schema::drop('users');
      Schema::drop('skills');
    }
}
