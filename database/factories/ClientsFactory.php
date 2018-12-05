<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'avatar'=>$faker->imageUrl($width = 640, $height = 480),
        'age'=>$faker->numberBetween($min = 18, $max = 100),
        'email'=>$faker->email,
        'number'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'country'=>$faker->country,
        'notes'=>$faker->text,
    ];
});
