<?php

use Faker\Generator as Faker;

$factory->define(Sekolah::class, function (Faker $faker) {
  $jenjangId = $faker->randomElement(Jenjang::pluck('id'));
  $statusId = $faker->randomElement(Status::pluck('id'));
  $kecamatanId = $faker->randomElement(Kecamatan::pluck('id'));
  $kelurahanId = $faker->randomElement(Kelurahan::whereKecamatanId($kecamatanId)->pluck('id'));
  return [
    'npsn' => $faker->randomNumber(8),
    'nama' => $faker->company,
    'nss' => $faker->randomNumber(9),
    'nss' => $faker->randomNumber(9),
    'jenjang_id' => $jenjangId,
    'status_id' => $statusId,
    'kecamatan_id' => $kecamatanId,
    'kelurahan_id' => $kelurahanId,
    'alamat' => $faker->address,
    'no_telepon' => $faker->phoneNumber($countryCodePrefix = true, $formatting = true, 13),
    'email' => $faker->email,
  ];
});
