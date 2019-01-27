<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swimmingpool extends Model
{
   protected $fillable = ['swimmingpool_id','name','location','length','type'];
}
