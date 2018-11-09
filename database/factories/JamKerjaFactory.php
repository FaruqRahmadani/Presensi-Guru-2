<?php

use Faker\Generator as Faker;

$factory->define(JamKerja::class, function (Faker $faker) {
  $sekolahId = $faker->randomElement(Sekolah::pluck('id'));
  $hari = $faker->randomElement(['1', '2', '3', '4', '5', '6', '7']);
  while (App\JamKerja::whereSekolahId($sekolahId)->whereHari($hari)->count()) {
    $sekolahId = $faker->randomElement(Sekolah::pluck('id'));
    $hari = $faker->randomElement(['1', '2', '3', '4', '5', '6', '7']);
    echo "Mencari Data Unique Yang Bisa Diinput, Batalkan Jika Sudah Terlalu Lama, artinya kadada data yang unique lak ay\n";
    sleep(1);
  }
  return [
    'sekolah_id' => $sekolahId,
    'hari' => $hari,
    'jam_masuk' => $faker->time,
    'jam_pulang' => $faker->time,
  ];
});
