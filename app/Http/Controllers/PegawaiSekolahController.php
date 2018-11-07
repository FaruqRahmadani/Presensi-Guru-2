<?php

namespace App\Http\Controllers;

use App\Repositories\PegawaiRepository;
use App\Repositories\SekolahRepository;
use Illuminate\Http\Request;
use Auth;

class PegawaiSekolahController extends Controller
{
  public function data(PegawaiRepository $pegawai, SekolahRepository $sekolah){
    $pegawai = $pegawai->where('sekolah_id', Auth::User()->Sekolah->id);
    $sekolah = $sekolah->get(Auth::User()->Sekolah->id);
    return view('pegawaiSekolah.data', compact('pegawai', 'sekolah'));
  }
}
