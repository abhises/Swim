<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Target_time extends Model
{
	use SoftDeletes;


    protected $dates = ['deleted_at'];

    public function swimmer()
    {
    	return $this->belongsTo('App\Swimmer');
    }
}
