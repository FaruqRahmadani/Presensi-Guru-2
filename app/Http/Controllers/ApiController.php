<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\KelurahanRepository;
use App\Repositories\JenjangRepository;
use App\Repositories\SekolahRepository;
use App\Repositories\AbsensiRepository;
use App\Repositories\PegawaiRepository;
use Auth;

class ApiController extends Controller
{
  public function dataKelurahan(KelurahanRepository $kelurahan, $kecamatanId){
    $kelurahan = $kelurahan->where('kecamatan_id', $kecamatanId)->get();
    return $kelurahan;
  }

  public function dataJenjang(JenjangRepository $jenjang){
    return $jenjang->all();
  }

  public function dataSekolah(SekolahRepository $sekolah){
    return $sekolah->all();
  }

  public function dataStatistikPresensi($sekolahId, SekolahRepository $sekolah){
    $dataSekolah = $sekolah->with(['Absensi.KategoriAbsen:id,kode,kode_warna'])->where('id', $sekolahId)->first();
    $presensi = $dataSekolah->Absensi->groupBy('KategoriAbsen.kode');
    $statistik = $presensi->map(function ($item, $key) {
      return $item->count();
    });
    $tanpaKeterangan = ($dataSekolah->Absensi->groupBy("tanggal")->count() * $dataSekolah->Pegawai->count())- $statistik->sum();
    $statistik->put('Tanpa Keterangan', $tanpaKeterangan);
    return $statistik;
  }

  public function dataStatistikPresensiPegawai($id, AbsensiRepository $absensi, PegawaiRepository $pegawai){
    $dataPegawai = $pegawai->with(['Absensi.KategoriAbsen:id,kode,kode_warna'])->findOrFail($id);
    $presensi = $dataPegawai->Absensi->groupBy('KategoriAbsen.kode');
    $statistik = $presensi->map(function ($item, $key) {
      return ['jumlah' => $item->count(), 'kode_warna' => $item->first()->KategoriAbsen->kode_warna];
    });
    $tanpaKeterangan = $absensi->where('sekolah_id', $dataPegawai->sekolah_id)->get()->groupBy('tanggal')->count() - $statistik->sum();
    $statistik->put('Tanpa Keterangan', ['jumlah' => $tanpaKeterangan, 'kode_warna' => '#000000']);
    $data['pegawai'] = $dataPegawai;
    $data['statistik'] = $statistik;
    return $data;
  }
}
