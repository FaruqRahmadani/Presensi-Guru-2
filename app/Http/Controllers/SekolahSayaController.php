<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahSayaController extends Controller
{
  public function info(){
    return view('sekolahSaya.info');
  }

  public function edit(){
    return view('sekolahSaya.edit');
  }
}
