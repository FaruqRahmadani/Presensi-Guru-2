<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
  protected $fillable = ['npsn', 'nama', 'nss', 'jenjang_id', 'status_id', 'pegawai_id', 'kecamatan_id', 'kelurahan_id', 'alamat', 'no_telepon', 'email'];

  public function Pegawai(){
    return $this->belongsTo('App\Pegawai');
  }

  public function Jenjang(){
    return $this->belongsTo('App\Jenjang');
  }

  public function Status(){
    return $this->belongsTo('App\Status');
  }

  public function Kecamatan(){
    return $this->belongsTo('App\Kecamatan');
  }

  public function Kelurahan(){
    return $this->belongsTo('App\Kelurahan');
  }

  public function getNamaKepsekAttribute(){
    if (!$this->pegawai_id) {
      return "Belum Diisi";
    }
    return $this->Pegawai->nama;
  }
}
