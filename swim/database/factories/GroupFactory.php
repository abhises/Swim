<?php

use Faker\Generator as Faker;

$factory->define(App\Group::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
        'coach_name'=>$faker->userName,
        'phone_no'=>$faker->phoneNumber,
        'email'=>$faker->email,

    ];
});
