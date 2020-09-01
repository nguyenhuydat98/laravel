<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        'user_id' 	 => $faker->unique()->numberBetween($min=1, $max=100),
        'username' 	 => $faker->userName,
        'password' 	 => $faker->password,
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ];
});
