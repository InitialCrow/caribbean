<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	public $timestamps = false;
    	protected $fillable = [
		'admin_id','image_uri'
	];
	public function admin_id(){
		return $this->belongsTo('App\Admin');
	}
	public function image(){
		return $this->hasMany('App\Gallery');
	}
}
