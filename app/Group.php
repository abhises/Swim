<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Swimmer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
	 use SoftDeletes;


    protected $dates = ['deleted_at'];

	Protected $fillable=['name','user_id'];

    public function swimmers()
    {
    	return $this->belongsToMany('App\Swimmer','group_swimmer','group_id','swimmer_id');
    }

    public function users()
    {
    	return $this->belongsTO('App\User');
    }
}
