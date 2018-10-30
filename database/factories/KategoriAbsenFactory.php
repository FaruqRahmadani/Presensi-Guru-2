<?php

use Faker\Generator as Faker;

$factory->define(KategoriAbsen::class, function (Faker $faker) {
  return [
    'kode' => $faker->word,
    'kode_warna' => $faker->hexcolor,
    'keterangan' => $faker->sentence($nb = 3),
  ];
});
