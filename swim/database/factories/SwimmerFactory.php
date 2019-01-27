<?php

//use App\Group;
use App\Target_time;
use Faker\Generator as Faker;


$factory->define(App\Swimmer::class, function (Faker $faker) {
    return [
    	// 'target_time_id'=>function(){
    	// 	return Target_time::all()->random();
    	// },
    	'firstname'=>$faker->firstNameMale,
		'middlename'=>$faker->lastName,
    	'lastname'=>$faker->lastName ,
    	'nickname'=>$faker->name,
    	'uniquename'=>$faker->title,
    	'dob'=>$faker->dateTime,
    	'city_of_birth'=>$faker->dateTime,

        ];
});
