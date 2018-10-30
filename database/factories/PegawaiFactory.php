<?php

use Faker\Generator as Faker;

$factory->define(Pegawai::class, function (Faker $faker) {
  $sekolahId = $faker->randomElement(Sekolah::pluck('id'));
  return [
    'nip' => $faker->randomNumber(9),
    'nuptk' => $faker->randomNumber(9),
    'nama' => $faker->name,
    'sekolah_id' => $sekolahId,
    'tempat_lahir' => $faker->city,
    'tanggal_lahir' => $faker->dateTime('-18 years'),
    'jenis_kelamin' => $faker->randomElement([1,2]),
    'no_handphone' => $faker->phoneNumber($countryCodePrefix = true, $formatting = true, 13),
    'email' => $faker->email,
    'alamat' => $faker->address,
    'sidikjari_id' => $faker->randomNumber(5),
  ];
});
