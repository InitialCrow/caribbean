<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_blogs', function (Blueprint $table) {
            
                $table->increments('id');
                $table->string('title_html',50)->nullable();
                $table->text('text')->nullable();
                $table->string('image_uri',50)->nullable();
                $table->integer('admin_id')->unsigned();
                $table->integer('guest_id')->unsigned()->nullable();
                $table->foreign('guest_id')->references('id')->on('guests')->onDelete('cascade');
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
        Schema::drop('content_blogs');
    }
}
