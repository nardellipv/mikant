<?php

use Faker\Generator as Faker;

$factory->define(\App\ModelFront\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => rand(1, 10),
    ];
});
