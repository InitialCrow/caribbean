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
                $table->integer('content_blog_id')->unsigned();
                $table->string('todo',50);    
                $table->foreign('content_blog_id')->references('id')->on('content_blogs')->onDelete('cascade');                   
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
