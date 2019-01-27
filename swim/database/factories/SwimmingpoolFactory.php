<?php

use Faker\Generator as Faker;

$factory->define(App\Swimmingpool::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'location'=>$faker->address,
        'length'=>$faker->phoneNumber,
        'type'=>$faker->userName
    ];
});
