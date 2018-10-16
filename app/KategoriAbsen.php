<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriAbsen extends Model
{
  use SoftDeletes;

  protected $fillable = ['kode', 'keterangan', 'kode_warna'];

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }
}
