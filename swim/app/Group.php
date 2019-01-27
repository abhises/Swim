<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Swimmer;

class Group extends Model
{
	Protected $fillable=['name','phone_no','email'];

    public function swimmers()
    {
    	return $this->belongsToMany('App\Swimmer','group_swimmer','group_id','swimmer_id');
    }

    public function user()
    {
    	return $this->belongsTO('App\User');
    }
}
