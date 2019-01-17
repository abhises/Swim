<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
class Swimmer extends Model
{
    public function group()
    {
    	return $this->belongsTo('App\Group');
    }
}
