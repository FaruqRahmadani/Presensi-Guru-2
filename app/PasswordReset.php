<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
  protected $fillable = ['token', 'email', 'user_id'];

  public function User(){
    return $this->belongsTo('App\User');
  }
}
