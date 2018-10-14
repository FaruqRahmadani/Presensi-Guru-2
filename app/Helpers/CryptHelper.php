<?php
namespace App\Helpers;

use Illuminate\Contracts\Encryption\DecryptException;

class CryptHelper
{
  public static function Encrypt($value){
    return encrypt($value);
  }

  public static function Decrypt($value){
    try {
      return decrypt($value);
    } catch (DecryptException $e) {
      return abort('404');
    }
  }
}
