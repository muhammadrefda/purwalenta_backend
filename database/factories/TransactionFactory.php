<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use Faker\Generator as Faker;


$factory->define(\App\Transaction::class, function (Faker $faker)

{

    $tutorlenta = \App\Tutorlenta::has('courses')->get()->random();
    $kawanlenta = User::all()->except($tutorlenta->id)->random();
    return [
        'quantity' => $faker->numberBetween(1,3),
        'kawanlenta' => $kawanlenta->id,
        'course_id' => $tutorlenta->courses->random()->id,
    ];
});
