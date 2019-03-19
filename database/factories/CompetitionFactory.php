<?php

use App\Competition;
use App\Game;
use App\Swimmer;
use Faker\Generator as Faker;

$factory->define(App\Competition::class, function (Faker $faker) {
   return [
       //'swimmer_id'=>function(){
    	// 	return Swimmer::all()->random();
    	// },
    	 	'game_id'=>function(){
    		return Game::all()->random();
    	 },
    	'freestyle_50'=>$faker->dateTime,
    	'freestyle_100'=>$faker->dateTime,
    	'freestyle_200'=>$faker->dateTime,
    	'freestyle_400'=>$faker->dateTime,
    	'freestyle_800'=>$faker->dateTime,
    	'freestyle_1500'=>$faker->dateTime,
    	'breaststroke_50'=>$faker->dateTime,
    	'breaststroke_100'=>$faker->dateTime,
    	'breaststroke_200'=>$faker->dateTime,
    	'butterfly_50'=>$faker->dateTime,
    	'butterfly_100'=>$faker->dateTime,
    	'butterfly_200'=>$faker->dateTime,
    	'IndMedley_200'=>$faker->dateTime,
    	'IndMedley_400'=>$faker->dateTime,
    ];
});
