<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'price' => $faker->url,
        'description' => $faker->paragraph,
    ];
});
