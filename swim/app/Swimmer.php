<?php

namespace App;

use App\Competition;
use App\Group;
use Illuminate\Database\Eloquent\Model;

class Swimmer extends Model
{
    //Protected 

    public function groups()
    {
    	return $this->belongsToMany('App\Group','group_swimmer','swimmer_id','group_id');
    }

    public function competitions()
    {
    	return $this->belongsToMany('App\Competition','competition_swimmer','swimmer_id','competition_id');
    }

    // public function times()
    // {
    // 	return $this->belongsTo('App\Target_time');
    // }
}
