<?php

$factory->define(App\CandidatesDetail::class, function (Faker\Generator $faker) {
    return [
        "candidate_id" => factory('App\Candidate')->create(),
        "company_name" => $faker->name,
        "designation" => $faker->name,
        "date_from" => $faker->name,
        "date_to" => $faker->name,
        "contact_number" => $faker->name,
        "address" => $faker->name,
    ];
});
