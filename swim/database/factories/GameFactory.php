<?php

//use App\Competition;
use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        // 'competition_id'=>function(){
        //     return Competition::all()->array_rand();
        //  },
        	'name'=>$faker->name,
        	'start_date'=>$faker->dateTime,
        	'end_date'=>$faker->dateTime
    ];
});
