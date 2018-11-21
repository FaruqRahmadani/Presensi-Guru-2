<?php

namespace App\Http\Controllers;

use App\Repositories\KecamatanRepository;
use App\Repositories\KelurahanRepository;
use App\Repositories\JenjangRepository;
use App\Repositories\PegawaiRepository;
use App\Repositories\SekolahRepository;
use App\Repositories\StatusRepository;
use Illuminate\Http\Request;
use Auth;

class SekolahSayaController extends Controller
{
  public function info(){
    $sekolah = Auth::User()->Sekolah;
    return view('sekolahSaya.info', compact('sekolah'));
  }

  public function editForm(JenjangRepository $jenjang, StatusRepository $status, KecamatanRepository $kecamatan, KelurahanRepository $kelurahan, PegawaiRepository $pegawai){
    $sekolah = Auth::User()->Sekolah;
    $jenjang = $jenjang->all();
    $status = $status->all();
    $kecamatan = $kecamatan->all();
    $kelurahan = $kelurahan->where('kecamatan_id' ,$sekolah->kecamatan_id)->get();
    $pegawai = $pegawai->where('sekolah_id', $sekolah->id)->get();
    return view('sekolahSaya.edit', compact('sekolah', 'jenjang', 'status', 'kecamatan', 'kelurahan', 'pegawai'));
  }

  public function editSubmit(Request $request, SekolahRepository $sekolah){
    $sekolah->update(Auth::User()->Sekolah->id, $request->all());
    return redirect()->route('sekolahSayaInfo')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Diubah']);
  }
}
