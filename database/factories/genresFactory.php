<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\genres;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(genres::class, function (Faker $faker) {
    return [
        //
        'name' => Str::random(10),
    ];
});
