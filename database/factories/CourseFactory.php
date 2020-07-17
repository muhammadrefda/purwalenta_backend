<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Course::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->paragraph,
        'price' => $faker->randomDigitNotNull,
        'imageIntroduction' => $faker->title,
        'videoIntroduction' => $faker->title,
        'videoModule' => $faker->title,
        'quantity' => $faker->randomDigitNotNull,
        'tutorlenta_id' => \App\Tutorlenta::all()->random()->id,
    ];
});
