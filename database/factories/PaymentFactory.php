<?php

use Faker\Generator as Faker;
use App\ModelBack\Payment;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'method'=>$faker->creditCardType,
    ];
});
