<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name'   	 => $faker->name,
        'address' 	 => $faker->address,
        'phone' 	 => $faker->phoneNumber,
        'email'	   	 => $faker->unique()->safeEmail,
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ];
});
