<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SekolahSayaController extends Controller
{
  public function info(){
    $sekolah = Auth::User()->Sekolah;
    return view('sekolahSaya.info', compact('sekolah'));
  }

  public function edit(){
    return view('sekolahSaya.edit');
  }
}
