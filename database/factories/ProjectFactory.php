<?php

use Faker\Generator as Faker;
use App\ModelBack\Project;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'date_start' => $faker->dateTimeBetween($startDate = '-6 month', $endDate = '-2 month', $timezone = null),
        'date_end' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = now(), $timezone = null),
        'observation' => $faker->text($maxNbChars = 200),
        'client_id' => rand(1, 20),
    ];
});
