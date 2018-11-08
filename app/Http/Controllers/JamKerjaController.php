<?php

namespace App\Http\Controllers;

use App\Repositories\JamKerjaRepository;
use Illuminate\Http\Request;
use Auth;

class JamKerjaController extends Controller
{
  public function data(JamKerjaRepository $jamKerja){
    $jamKerja = $jamKerja->where('sekolah_id', Auth::User()->sekolah_id)->sortBy('hari');
    return view('jamKerja.data', compact('jamKerja'));
  }

  public function tambahForm(){
    return view('jamKerja.adminSekolah-tambah');
  }
}
