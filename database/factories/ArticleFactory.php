<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(32),
        'slug' => null,
        'description' => $faker->realText(1000),
        'published' => 1
    ];
});