<?php

use Faker\Generator as Faker;

$factory->define(Jenjang::class, function (Faker $faker) {
  return [
    'nama' => $faker->colorName,
  ];
});
