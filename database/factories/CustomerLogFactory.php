<?php


use App\Models\CustomerLog;
use Illuminate\Database\Eloquent\Factory;
use Faker\Generator as Faker;

$factory->define(CustomerLog::class, function (Faker $faker) {
    return [
        'customer_id' => mt_rand(1, 30),
        'user_id' => mt_rand(1, 4),
        'log' => $faker->sentence(40),
    ];
});
