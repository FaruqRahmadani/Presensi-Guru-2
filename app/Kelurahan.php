<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
  protected $hidden = [
    'kecamatan_id', 'created_at', 'updated_at',
  ];
}
