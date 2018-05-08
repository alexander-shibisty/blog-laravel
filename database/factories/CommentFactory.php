<?php

use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'content' => $faker->text,
        'publicated' => rand(0,1),
        'created_at' => date('Y-m-d'),
        'post_id' => \App\Post::all()->random(1)[0]->id,
    ];
});
