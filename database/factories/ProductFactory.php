<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'user_id' 	  => $faker->numberBetween($min=1, $max=100),
        'name' 		  => $faker->name,
    	'price' 	  => $faker->numberBetween($min=100, $max=1000),
    	'description' => $faker->text,
    	'image_path'  => $faker->imageUrl,
    	'active' 	  => $faker->numberBetween($min=0, $max=1),
    	'created_at'  => new DateTime,
    	'updated_at'  => new DateTime
    ];
});
