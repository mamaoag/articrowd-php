<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->realText,
        'body' => $faker->paragraph,
        'tags' => 'Ruby',
        'author_id' => 1
    ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        'offer' => $faker->numberBetween(10000,500000),
        'position' => $faker->realText,
        'description' => $faker->paragraph,
        'client_id' => 1
    ];
});

$factory->define(App\Idea::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->realText,
        'body' => $faker->paragraph,
        'tags' => 'PHP',
        'author_id' => 1
    ];
});