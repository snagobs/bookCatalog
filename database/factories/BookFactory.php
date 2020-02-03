<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(20, 2),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 5, $max = 299),
        'description' => $faker->realText(),
    ];
});
