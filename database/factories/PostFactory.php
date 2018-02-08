<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->text(30);
    return [
        'slug' => str_slug($title),
        'title' => $title,
        'content' => $faker->paragraph(25)
    ];
});