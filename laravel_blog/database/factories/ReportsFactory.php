<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(App\Report::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'contents' => $faker->realText(500),
    ];
});