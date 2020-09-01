<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'total' 	 => $faker->numberBetween($min=100, $max=1000),
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ];
});
