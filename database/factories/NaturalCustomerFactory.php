<?php

use Faker\Generator as Faker;

$factory->define(App\NaturalCustomer::class, function (Faker $faker) {
    return [
        'cedula' => $faker->unique()->randomNumber(),
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'cellphone1' => $faker->phoneNumber,
        'cellphone2' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'department' => $faker->sentence()
    ];
});
