<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;

class Game extends Model
{
    public function competitions()
    {
    	return $this->hasMany('App\Competition');
    }
}
