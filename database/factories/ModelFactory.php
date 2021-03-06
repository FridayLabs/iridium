<?php

$factory->define(Iridium\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'remember_token' => str_random(10),
    ];
});
