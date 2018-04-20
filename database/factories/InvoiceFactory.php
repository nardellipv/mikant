<?php

use Faker\Generator as Faker;
use App\ModelBack\Invoice;


$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'date_start' => $faker->dateTimeBetween($startDate = '-6 month', $endDate = '-2 month', $timezone = null),
        'date_end' => $faker->dateTimeBetween($startDate = '-1 month', $endDate = now(), $timezone = null),
        'price' => $faker->numberBetween($min = 7000, $max = 30000),
        'balance' => $faker->numberBetween($min = 0, $max = 5000),
        'quantity' => $faker->numberBetween($min = 1, $max = 2),
        'tax'=> '21',
        'description' => $faker->text($maxNbChars = 200),
        'status' => $faker->randomElement($array = array('DRAFT','PAY','SENT', 'CANCEL')),
        'client_id' => rand(1, 20),
        'project_id' => rand(1, 3),
        'payment_id' => rand(1, 3),
    ];
});
