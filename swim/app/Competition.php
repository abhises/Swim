<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    public function swimmers()
    {
    	return $this->belongsToMany('App\Swimmer','competition_swimmer','competition_id','swimmer_id');
    }
    
    public function game()
    {
    	return $this->belongsTo('App\Game');
    }

}
