<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'login','name', 'url'
	];

    	
    	public function guests(){
    		return $this->hasMany('App\Guest');
    	}
            public function contentBlog(){
                        return $this->hasMany('App\ContentBlog');
            }
            public function gallery(){
                        return $this->hasMany('App\Gallery');
            }
            public function comments(){
                        return $this->hasMany('App\Comment');
            }
            public function todoList(){
                        return $this->hasMany('App\TodoList');
            }
            public function presentation(){
                        return $this->hasOne('App\Presentation');
            }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
	protected $hidden = [
		'password', 'remember_token',
	];
}

