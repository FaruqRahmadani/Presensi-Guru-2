<?php

use Illuminate\Database\Seeder;

class KecamatansTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $kecamatan = [
      ['id' => '1', 'nama' => 'Aluh - Aluh'],
      ['id' => '2', 'nama' => 'Beruntung Baru'],
      ['id' => '3', 'nama' => 'Gambut'],
      ['id' => '4', 'nama' => 'Kertak Hanyar'],
      ['id' => '5', 'nama' => 'Tatah Makmur'],
      ['id' => '6', 'nama' => 'Sungai Tabuk'],
      ['id' => '7', 'nama' => 'Martapura'],
      ['id' => '8', 'nama' => 'Martapura Timur'],
      ['id' => '9', 'nama' => 'Martapura Barat'],
      ['id' => '10', 'nama' => 'Astambul'],
      ['id' => '11', 'nama' => 'Karang Intan'],
      ['id' => '12', 'nama' => 'Aranio'],
      ['id' => '13', 'nama' => 'Sungai Pinang'],
      ['id' => '14', 'nama' => 'Paramasan'],
      ['id' => '15', 'nama' => 'Pengaron'],
      ['id' => '16', 'nama' => 'Sambung Makmur'],
      ['id' => '17', 'nama' => 'Mataraman'],
      ['id' => '18', 'nama' => 'Simpang Empat'],
      ['id' => '19', 'nama' => 'Telaga Bauntung'],
    ];
    if (!DB::table('kecamatans')->count()) {
      DB::table('kecamatans')->insert($kecamatan);
    }
  }
}
