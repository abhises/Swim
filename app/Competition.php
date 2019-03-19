<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competition extends Model
{
	 use SoftDeletes;


    protected $dates = ['deleted_at'];

    protected $fillable=['game_id'];

    public function swimmers()
    {
    	return $this->belongsToMany('App\Swimmer','competition_swimmer','competition_id','swimmer_id');
    }
    
    public function game()
    {
    	return $this->belongsTo('App\Game');
    }

}
