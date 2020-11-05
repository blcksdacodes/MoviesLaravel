<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\episodes;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(episodes::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->sentence,
        'movies_id'=>Factory(App\movies::class)-> create()->id,
        'episodes'=>Rand(1, 10),
    ];
});
