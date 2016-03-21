<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
   	public $timestamps = false;
		/**
		* The attributes that are mass assignable.
		*
		* @var array
		*/
	protected $fillable = [
		'admin_id','todo'
	];

	public function content_blog_id(){
		return $this->belongsTo('App\Admin');
	}
	
}
