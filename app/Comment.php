<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public $timestamps = false;
		/**
		* The attributes that are mass assignable.
		*
		* @var array
		*/
	protected $fillable = [
		'text', 'image_uri', 'admin_id','name','content_blog_id'
	];

	public function guest_id(){
		return $this->belongsTo('App\Guest');
	}
	public function admin_id(){
		return $this->belongsTo('App\Admin');
	}
	public function content_blog_id(){
		return $this->belongsTo('App\ContentBlog');
	}
	public function text(){
		return $this->hasMany('App\Comment');
	}
	public function image(){
		
		return $this->hasMany('App\Comment');
	}
}
