<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
  protected $fillable = ['nama'];
  protected $appends = ['CountSekolah'];

  public function Sekolah(){
    return $this->hasMany('App\Sekolah');
  }

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }

  public function getCountSekolahAttribute(){
    return $this->Sekolah->count();
  }
}
