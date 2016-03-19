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
		'content_blog_id','todo'
	];

	public function coontent_blog_id(){
		return $this->belongsTo('App\Admin');
	}
	
}
