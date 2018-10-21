<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use HDate;

class Pegawai extends Model
{
  protected $fillable = ['nip', 'nama', 'nuptk', 'sekolah_id', 'tanggal_lahir', 'tempat_lahir', 'jenis_kelamin', 'no_handphone', 'email', 'alamat', 'foto', 'sidikjari_id'];

  public function getTTLAttribute(){
    $tanggal = HDate::formatDate($this->tanggal_lahir);
    return "$this->tempat_lahir, $tanggal";
  }

  public function getJenisKelaminTextAttribute(){
    return $this->jenis_kelamin == 1? "Laki-Laki" : "Perempuan";
  }

  public function Sekolah(){
    return $this->belongsTo('App\Sekolah');
  }
}
