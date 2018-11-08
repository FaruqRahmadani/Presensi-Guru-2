<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JamKerja extends Model
{
  protected $fillable = ['hari', 'jam_masuk', 'jam_pulang', 'sekolah_id'];

  public function getHariTextAttribute(){
    $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
    return $hari[$this->hari-1] ?? "Kode Hari Tidak Diketahui";
  }
}
