<?php

use Faker\Generator as Faker;
use App\ModelBack\Hosting;

$factory->define(Hosting::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array('basic', 'standard', 'premium')),
        'plan' => $faker->randomElement($array = array('MikAnt_basic', 'MikAnt_standard', 'MikAnt_premium')),
        'space_disk' => $faker->randomElement($array = array('1', '3', '5')),
        'transferencia' => $faker->randomElement($array = array('1', '3', '5')),
        'email_account' => $faker->randomElement($array = array('1', '3', '5')),
        'data_base' => $faker->randomElement($array = array('1', '3', '5')),
        'ftp' => $faker->randomElement($array = array('1', '3', '5')),
        'year_pay' =>$faker->numberBetween($min = 500, $max = 1000),
        'cost_before' => $faker->numberBetween($min = 50, $max = 100),
        'cost_month' => $faker->numberBetween($min = 40, $max = 90),
        'cost_domain' => '300',
    ];
});
