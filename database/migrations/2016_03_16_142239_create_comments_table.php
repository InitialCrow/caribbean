<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name',20);
                $table->text('text');
                $table->string('image_uri',50)->nullable();
                $table->integer('admin_id')->unsigned();
                $table->integer('content_blog_id')->unsigned();
                $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::drop('comments');
    }
}
