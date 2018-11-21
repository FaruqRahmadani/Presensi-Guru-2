<?php
namespace App\Helpers;

class PresensiHelper
{
  public static function pegawaiAllLast($pegawai, $tanggal){
    return $pegawai->with(['LastAbsensi' => function($query) use ($tanggal){
      $query->with('KategoriAbsen')->whereDate('tanggal', $tanggal);
    }])->get();
  }
}
