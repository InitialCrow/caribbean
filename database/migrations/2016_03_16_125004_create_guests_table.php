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
                $table->integer('admin_id');
                $table->string('name',20);
                $table->string('email')->unique();
                $table->boolean('status');
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
        Schema::drop('guests');
    }
}
