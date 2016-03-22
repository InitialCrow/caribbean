<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('admin_id')->unsigned();
                $table->string('name',20);
                $table->string('email')->unique();
                $table->boolean('status');
                $table->string('token',50);
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
        Schema::drop('guests');
    }
}
