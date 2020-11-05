<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\movies;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(movies::class, function (Faker $faker) {
    return [
        
        'title' => $faker->sentence,
        'genres_id'=> Factory(App\genres::class) -> create()->id,
        'pathphoto' => Str::random(),
        'description'=> $faker->paragraph,
        'rating'=> Rand(1, 5),
        
    ];
});
