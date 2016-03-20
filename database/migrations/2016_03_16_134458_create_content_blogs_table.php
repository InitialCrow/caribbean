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
                $table->text('presentation_text');
                $table->string('title_html',50)->nullable();
                $table->text('text')->nullable();
                $table->string('image_uri',50)->nullable();
                $table->integer('admin_id')->unsigned();
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
