<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'content' => $faker->text,
        'title' => $faker->title,
        'h1' => $faker->title,
        'description' => $faker->title,
        'publicated' => rand(0,1),
        'created_at' => date('Y-m-d H:i:s'),
    ];
});
