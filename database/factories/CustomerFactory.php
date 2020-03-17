<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('pt_BR');
    return [
        'name' => $faker->name,
    ];
});
