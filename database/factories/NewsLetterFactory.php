<?php

use Faker\Generator as Faker;
use App\ModelFront\NewsLetter;

$factory->define(NewsLetter::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
    ];
});
