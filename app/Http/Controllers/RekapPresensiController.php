<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapPresensiController extends Controller
{
  public function data(){
    return view('rekapPresensi.adminSekolah-data');
  }
}
