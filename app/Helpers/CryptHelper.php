<?php
namespace App\Helpers;

use Illuminate\Contracts\Encryption\DecryptException;
use Crypt;

class CryptHelper
{
  public static function Encrypt($value){
    return Crypt::Encrypt($value);
  }

  public static function Decrypt($value){
    try {
      return Crypt::decrypt($value);
    } catch (DecryptException $e) {
      return abort('404');
    }
  }
}
