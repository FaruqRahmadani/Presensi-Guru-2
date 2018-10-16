<?php

use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {
  return [
    'nama' => $faker->colorName,
  ];
});
