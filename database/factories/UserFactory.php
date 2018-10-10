<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "first_name" => $faker->name,
        "middle_name" => $faker->name,
        "last_name" => $faker->name,
        "email" => $faker->safeEmail,
        "contact_number" => $faker->randomNumber(3),
        "password" => str_random(10),
        "role_id" => factory('App\Role')->create(),
        "remember_token" => $faker->name,
    ];
});
