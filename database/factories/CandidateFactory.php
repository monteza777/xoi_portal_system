<?php

$factory->define(App\Candidate::class, function (Faker\Generator $faker) {
    return [
        "first_name" => $faker->name,
        "middle_name" => $faker->name,
        "last_name" => $faker->name,
        "email_address" => $faker->name,
        "contact_number" => $faker->randomNumber(3),
        // "birth_day" => $faker->format('Y-m-d H:i:s'),
        "age" => $faker->randomNumber(2)
    ];
});
