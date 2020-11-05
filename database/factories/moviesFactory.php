<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\movies;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(movies::class, function (Faker $faker) {
    return [
        
        'title' => Str::random(10),
        'genres_id'=> Factory(App\genres::class) -> create()->id,
        'pathphoto' => Str::random(),
        'description'=> Str::random(200),
        'rating'=> Rand(1,5),
        
    ];
});
