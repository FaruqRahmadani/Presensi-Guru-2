<?php

namespace App\Http\Controllers;

use App\Repositories\JamKerjaRepository;
use App\Repositories\SekolahRepository;
use Illuminate\Http\Request;
use Auth;

class JamKerjaController extends Controller
{
  public function data(SekolahRepository $sekolah, JamKerjaRepository $jamKerja){
    $sekolah = $sekolah->get(Auth::User()->sekolah_id);
    $jamKerja = $jamKerja->where('sekolah_id', Auth::User()->sekolah_id)->sortBy('hari');
    return view('jamKerja.data', compact('jamKerja', 'sekolah'));
  }

  public function tambahForm(){
    return view('jamKerja.adminSekolah-tambah');
  }
}
