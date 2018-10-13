<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
  return [
    'nama' => $faker->name,
    'username' => $faker->unique()->username,
    'password' => 'rahasia',
    'email' => $faker->unique()->safeEmail,
    'tipe' => $faker->numberBetween(1,2),
    // 'sekolah_id' => $faker->numberBetween(1,2),
    'remember_token' => str_random(10),
  ];
});
