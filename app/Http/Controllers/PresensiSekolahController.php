<?php

namespace App\Http\Controllers;

use App\Repositories\KategoriAbsenRepository;
use App\Repositories\PegawaiRepository;
use App\Imports\PresensiImport;
use Illuminate\Http\Request;
use Excel;
use Auth;

class PresensiSekolahController extends Controller
{
  public function data(){
    return view('presensiSekolah.data');
  }

  public function info(){
    return view('presensiSekolah.info');
  }

  public function inputForm(){
    return view('presensiSekolah.input');
  }

  public function inputSubmit(Request $request, PegawaiRepository $pegawai){
    $pegawai = $pegawai->where('sekolah_id', Auth::User()->sekolah_id);
    $fileExt = $request->berkas->getClientOriginalExtension();
    if ($fileExt != "xlsx") return redirect()->back()->with(['alert' => true, 'tipe' => 'error', 'judul' => 'File', 'pesan' => 'File Yang Di Upload Salah']);
    $import = Excel::toCollection(new PresensiImport, $request->berkas)->flatten(1);
    $filtered = $import->reject(function ($value) use($pegawai) {
      if (!$value["sidikjari_id"]) return $value;
      else {
        $dataPegawai = $pegawai->where('sidikjari_id', $value["sidikjari_id"])->first();
        if (!$dataPegawai) return $value;
        $value->put('nama', $dataPegawai->nama);
      }
    })->sortBy('tanggal');
    return $this->inputConfirm($filtered, new KategoriAbsenRepository);
  }

  public function inputConfirm($dataImport, $kategoriAbsen){
    $kategoriAbsen = $kategoriAbsen->all();
    return view('presensiSekolah.konfirmasi', compact('dataImport', 'kategoriAbsen'));
  }
}
