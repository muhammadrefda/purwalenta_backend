<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'verified' => $verified = $faker->randomElement([User::VERIFIED_USER, User::UNVERIFIED_USER]),
        'verification_token' => $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
        'admin' => $verified = $faker->randomElement([User::ADMIN_USER, User::REGULAR_USER]),
        'username' => $faker->userName,
        'phone_number' => $faker->randomDigit,
        'date_of_birth' => $faker->dateTime,
//        'balance' => $faker->randomDigitNotNull,
        'profile_picture' => $faker->title,
        'profile_desc' => $faker->paragraph,
        'status' => $faker->word,
//        'acc_bank' => $faker->randomDigit,
        'skill' => $faker->title,
        'personality' => $faker->word(3),
        'available_date' => $faker->date(),
        'available_time' => $faker->time(),
        'note' => $faker->paragraph,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),

    ];
});
