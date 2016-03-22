<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'status', 'admin_id', 'token'
    ];

    
    public function admin_id(){
        return $this->belongsTo('App\Admin');
    }
}
