<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('admins', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('login',50);
	        $table->string('name',50);
	        $table->string('url',50);
                        $table->string('timer',20)->nullable();
	        $table->rememberToken();
                  
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admins');
    }
}
