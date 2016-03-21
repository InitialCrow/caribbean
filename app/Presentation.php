<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    	public $timestamps = false;
		/**
		* The attributes that are mass assignable.
		*
		* @var array
		*/
	protected $fillable = [
		'admin_id','text'
	];

	public function admin_id(){
		return $this->belongTo('App\Admin');
	}
	
}
