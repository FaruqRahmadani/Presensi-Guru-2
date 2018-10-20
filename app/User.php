<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'nama', 'email', 'username', 'password', 'foto', 'tipe'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function setPasswordAttribute($value){
    if ($value) $this->attributes['password'] = bcrypt($value);
  }

  public function getTipeTextAttribute(){
    switch ($this->tipe) {
      case 1:
        return "Super Admin";
        break;
      case 2:
        return "Admin Sekolah";
        break;
      default:
        return "Kode Level User Tidak Diketahui";
        break;
    }
  }

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }

  public function Sekolah(){
    return $this->belongsTo('App\Sekolah');
  }
}
