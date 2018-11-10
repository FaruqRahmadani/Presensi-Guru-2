<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
  protected $fillable = ['pegawai_id', 'sidikjari_id', 'sekolah_id', 'tanggal', 'jam_masuk', 'jam_pulang', 'kategori_absen_id', 'keterangan'];
}
