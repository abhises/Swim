<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Competition;
use App\Group;
use Illuminate\Database\Eloquent\Model;

class Swimmer extends Model
{
     use SoftDeletes;


    protected $dates = ['deleted_at'];
    protected $fillable=['target_time_id','firstname','middlename','lastname','nickname','uniquename','dob','gender','city_of_birth','school','date_of_joined','photo','country','state','city','father_name','mother_name','height','weight','rest_hr','max_hr','skin_fold','distance','stroke','main'];


    public function groups()
    {
    	return $this->belongsToMany('App\Group','group_swimmer','swimmer_id','group_id');
    }

    public function competitions()
    {
    	return $this->belongsToMany('App\Competition','competition_swimmer','swimmer_id','competition_id');
    }

    public function times()
    {
    	return $this->hasOne('App\Target_time');
    }
}
