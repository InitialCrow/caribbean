<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentBlog extends Model
{

	public $timestamps = false;
		/**
		* The attributes that are mass assignable.
		*
		* @var array
		*/
	protected $fillable = [
		'admin_id', 'text', 'image_uri', 'title_html', 'guest_id'
	];

	public function guest_id(){
		return $this->belongsTo('App\Guest');
	}
	public function admin_id(){
		return $this->belongsTo('App\Admin');
	}
	public function text(){
		return $this->hasMany('App\ContentBlog');
	}
	public function image(){
		return $this->hasMany('App\ContentBlog');
	}

}
