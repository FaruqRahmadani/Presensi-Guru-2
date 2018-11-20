<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\KategoriAbsenRepository;
use App\Repositories\AbsensiRepository;
use App\Repositories\PegawaiRepository;
use Carbon\Carbon;
use Auth;

class RekapPresensiController extends Controller
{
  public function data(Request $request, KategoriAbsenRepository $kategoriAbsen, AbsensiRepository $absensi, PegawaiRepository $pegawai){
    $auth = Auth::User();
    $kategoriAbsen = $kategoriAbsen->all();
    $absensi = $absensi->where('sekolah_id', $auth->sekolah_id)->get(['tanggal'])->sortByDesc('tanggal');
    $periode = $absensi->map(function ($item, $key) {
      return Carbon::Parse($item->tanggal)->firstOfMonth();
    })->unique();
    $selectedPeriode = Carbon::parse($request->periode)??$periode->max();
    $pegawai = $this->getAbsensiPegawaiData($selectedPeriode);
    return view('rekapPresensi.data', compact('kategoriAbsen', 'periode', 'pegawai', 'selectedPeriode'));
  }

  private function getAbsensiPegawaiData($reqPeriode){
    $pegawai = new PegawaiRepository;
    return $pegawai->where('sekolah_id', Auth::User()->sekolah_id)->with(['Absensi' => function($query) use ($reqPeriode){
      $query->whereMonth('tanggal', $reqPeriode->format("m"))->whereYear('tanggal', $reqPeriode->format("Y"));
    }])->get();
  }
}
