<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
  protected $fillable = ['nama'];
  protected $appends = ['CountSekolah', 'CountPegawai'];

  public function Sekolah(){
    return $this->hasMany('App\Sekolah');
  }

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }

  public function getCountSekolahAttribute(){
    return $this->Sekolah->count();
  }

  public function getCountPegawaiAttribute(){
    $count = 0;
    foreach ($this->Sekolah as $Sekolah) {
      $count+=$Sekolah->Pegawai->count();
    }
    return $count;
  }
}
