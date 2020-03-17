<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('pt_BR');
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->sentence(),
        'price' => $faker->randomFloat(2, 10, 1000),
        'estimate_delivery' => $faker->randomDigit(),
    ];
});
