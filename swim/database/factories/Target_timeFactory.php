<?php

//use App\Swimmer;
use Faker\Generator as Faker;

$factory->define(App\Target_time::class, function (Faker $faker) {
    return [
    	// 'swimmer_id'=>function(){
    	// 	return Swimmer::all()->random();
    	//  },
        'time'=>$faker->time
    ];
});
