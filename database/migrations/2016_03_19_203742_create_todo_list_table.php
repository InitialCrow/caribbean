<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_lists', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('admin_id')->unsigned();
                $table->string('todo',50);    
                $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todo_lists');
    }
}
