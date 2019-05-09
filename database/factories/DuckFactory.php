<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Starduck;
use Faker\Generator as Faker;

$factory->define(Starduck::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->companyEmail,
        'department' => $faker->randomElement($array = array('Kaffe', 'HR', 'Konflikthantering', 'Kampanj', 'Slaveri')),
        'salary' => $faker->numberBetween($min = 15000, $max = 35000)
    ];
});
