<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
        'subtitle'=>$faker->sentence(),
        'release_date'=>$faker->date(),
    ];
});
