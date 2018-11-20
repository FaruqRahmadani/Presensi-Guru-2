<?php

namespace App\Http\Controllers;

use App\Repositories\KategoriAbsenRepository;
use App\Repositories\PegawaiRepository;
use App\Repositories\AbsensiRepository;
use App\Imports\PresensiImport;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Excel;
use Auth;

class PresensiSekolahController extends Controller
{
  public function data(AbsensiRepository $absensi, KategoriAbsenRepository $kategoriAbsen, PegawaiRepository $pegawai){
    $kategoriAbsen = $kategoriAbsen->all();
    $absensi = $absensi->where('sekolah_id', Auth::User()->sekolah_id)->get()->sortByDesc('tanggal')->groupBy('tanggal');
    $pegawai = $pegawai->where('sekolah_id', Auth::User()->sekolah_id);
    return view('presensiSekolah.data', compact('absensi', 'kategoriAbsen', 'pegawai'));
  }

  public function info(){
    return view('presensiSekolah.info');
  }

  public function inputForm(){
    return view('presensiSekolah.input');
  }

  public function inputSubmit(Request $request, PegawaiRepository $pegawai, AbsensiRepository $absensi){
    $pegawai = $pegawai->where('sekolah_id', Auth::User()->sekolah_id);
    $absensi = $absensi->where('sekolah_id', Auth::User()->sekolah_id);
    $fileExt = $request->berkas->getClientOriginalExtension();
    if ($fileExt != "xlsx") return redirect()->back()->with(['alert' => true, 'tipe' => 'error', 'judul' => 'File', 'pesan' => 'File Yang Di Upload Salah']);
    $import = Excel::toCollection(new PresensiImport, $request->berkas)->flatten(1);
    $filtered = $import->reject(function ($value) use($pegawai, $absensi) {
      $tanggal = Carbon::parse($value["tanggal"]);
      $validateStored = $absensi->where('tanggal', $tanggal)->where('sidikjari_id', $value["sidikjari_id"])->first();
      if (!$value["sidikjari_id"] || $validateStored) return $value;
      else {
        $dataPegawai = $pegawai->where('sidikjari_id', $value["sidikjari_id"])->first();
        if (!$dataPegawai) return $value;
        $value->put('pegawai', $dataPegawai);
      }
    })->sortBy('tanggal');
    return $this->confirmForm($filtered, new KategoriAbsenRepository);
  }

  public function confirmForm($dataImport, $kategoriAbsen){
    $kategoriAbsen = $kategoriAbsen->all();
    return view('presensiSekolah.konfirmasi', compact('dataImport', 'kategoriAbsen'));
  }

  public function confirmSubmit(Request $request, PegawaiRepository $pegawai, AbsensiRepository $absensi){
    $request = collect($request->only('data'))->flatten(1);
    $dataRequest = $request->transform(function($value, $key){
      $data = decrypt($value["data"]);
      array_forget($value, 'data');
      $value["pegawai_id"] = data_get($data, 'pegawai.id');
      $value["sidikjari_id"] = data_get($data, 'sidikjari_id');
      $value["sekolah_id"] = data_get($data, 'pegawai.sekolah_id');
      $value["tanggal"] = Carbon::parse(data_get($data, 'tanggal'));
      $value["jam_masuk"] = data_get($data, 'jam_masuk');
      $value["jam_pulang"] = data_get($data, 'jam_keluar');
      return $value;
    });
    foreach ($dataRequest as $valueRequest) {
      $absensi->store($valueRequest);
    }
    return redirect()->route('presensiSekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }
}
