<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
	 use SoftDeletes;


    protected $dates = ['deleted_at'];

    protected $fillable=['name','start_date','end_date'];

    public function competitions()
    {
    	return $this->hasMany('App\Competition');
    }
}
