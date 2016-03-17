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
                $table->string('title_html',50);
                $table->text('text');
                $table->string('image_uri',50);
                $table->integer('admin_id');
                $table->foreign('admin_id')->references('id')->on('admins')->onDelete('CASCADE');

                        
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
