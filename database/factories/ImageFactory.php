<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'url' 			=> $faker->imageUrl,
        'imageable_id' 	=> $faker->unique->numberBetween($min=0, $max=100),
        'imageable_type'=> $faker->randomElement(['App\User', 'App\Product']),
        'created_at'	=> new DateTime,
        'updated_at'	=> new DateTime,
    ];
});
