<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id')->default('1');
	          $table->string('group_level');
	          $table->string('group_type');
	          $table->string('department');
	          $table->date('start_date');
	          $table->date('finish_date');
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
        Schema::dropIfExists('current_groups');
    }
}
