<?php

use Faker\Generator as Faker;
use App\Group;


$factory->define(App\Swimmer::class, function (Faker $faker) {
    return [
    	'group_id'=>function(){
    		return Group::all()->random();
    	},
    	'firstname'=>$faker->firstNameMale,
		'Middlename'=>$faker->lastName,
    	'lastname'=>$faker->lastName ,
    	'nickname'=>$faker->name,
    	'uniquename'=>$faker->title,
    	'dob'=>$faker->dateTime,
    	'city_of_birth'=>$faker->dateTime,

        ];
});
