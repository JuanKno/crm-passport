<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'document' => $faker->buildingNumber,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address
    ];
});
