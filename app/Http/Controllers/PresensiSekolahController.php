<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiSekolahController extends Controller
{
  public function data(){
    return view('presensiSekolah.data');
  }

  public function input(){
    return view('presensiSekolah.input');
  }

  public function info(){
    return view('presensiSekolah.info');
  }
}
