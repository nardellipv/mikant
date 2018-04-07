<?php

use Faker\Generator as Faker;
use App\ModelFront\NewsLetter;

$factory->define(NewsLetter::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
    ];
});
