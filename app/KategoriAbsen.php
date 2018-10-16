<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriAbsen extends Model
{
  protected $fillable = ['kode', 'keterangan', 'kode_warna'];

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }
}
