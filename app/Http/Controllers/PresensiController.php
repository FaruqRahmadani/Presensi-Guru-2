<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PegawaiRepository;
use App\Repositories\SekolahRepository;
use App\Repositories\AbsensiRepository;
use App\Repositories\KategoriAbsenRepository;

class PresensiController extends Controller
{
  public function data(Request $request, SekolahRepository $sekolah, KategoriAbsenRepository $kategoriAbsen){
    $sekolah = $sekolah->all();
    $kategoriAbsen = $kategoriAbsen->all();
    $absensi = ($request->_token)?$this->dataAbsensi($request):null;
    $pegawai = ($request->_token)?$this->dataPegawai($request):null;
    return view('presensi.data', compact('sekolah', 'kategoriAbsen', 'absensi', 'pegawai', 'request'));
  }

  private function dataAbsensi($request){
    $absensi = new AbsensiRepository;
    $absensi = $absensi->where('sekolah_id', $request->sekolah_id)->whereBetween('tanggal', [$request->tanggal_awal, $request->tanggal_akhir])->get()->sortByDesc('tanggal')->groupBy('tanggal');
    return $absensi;
  }

  private function dataPegawai($request){
    $pegawai = new PegawaiRepository;
    $pegawai = $pegawai->where('sekolah_id', $request->sekolah_id);
    return $pegawai;
  }
}
