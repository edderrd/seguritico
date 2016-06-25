<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'identification' => $faker->numberBetween(100000000, 799999999),
        'address' => $faker->address,
        'address' => $faker->phoneNumber,
        'user_id' => 1,
        'email' => $faker->safeEmail,
    ];
});

$factory->define(App\Policy::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->bs,
        'price' => $faker->numberBetween(10000, 1000000),
        'description' => $faker->sentence(),
        'insurer_id' => $faker->numberBetween(1, 10),
        'policy_type_id' => $faker->numberBetween(1, 8),
    ];
});
