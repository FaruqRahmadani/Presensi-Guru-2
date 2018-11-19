<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiController extends Controller
{
  public function data(){
    return view('presensi.data');
  }
}
