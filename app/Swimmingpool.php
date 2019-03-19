<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Swimmingpool extends Model
{
	 use SoftDeletes;


    protected $dates = ['deleted_at'];

	
   protected $fillable = ['swimmingpool_id','name','location','length','type'];
}
