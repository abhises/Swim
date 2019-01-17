<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Swimmer;

class Group extends Model
{
    public function swimmers()
    {
    	return $this->hasMany('App\Swimmer');
    }
}
