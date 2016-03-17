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
                $table->integer('guest_id');
                $table->text('text');
                $table->string('image_uri',50);
                $table->integer('admin_id');
                $table->foreign('admin_id')->references('id')->on('admins')->onDelete('CASCADE');
                $table->foreign('guest_id')->references('id')->on('guests')->onDelete('CASCADE');

                        
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
