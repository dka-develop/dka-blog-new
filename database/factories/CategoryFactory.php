<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->numerify('Category ###'),
        'slug' => null,
        'parent_id' => 0,
        'published' => 1
    ];
});
