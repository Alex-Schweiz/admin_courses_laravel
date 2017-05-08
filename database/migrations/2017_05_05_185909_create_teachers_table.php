<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('teachers', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('name');
		    $table->date('date_of_birth');
		    $table->boolean('gender');
		    $table->string('email');
		    $table->string('phone');
		    $table->string('address');
		    $table->text('notes');
		    $table->string('photo')->default('http://lorempixel.com/640/640/people/');
		    $table->string('department');
		    $table->string('occupation');
		    $table->date('date_of_joining');
		    $table->integer('salary');
		    $table->boolean('fired')->default('0');
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
	    Schema::dropIfExists('teachers');
    }
}
