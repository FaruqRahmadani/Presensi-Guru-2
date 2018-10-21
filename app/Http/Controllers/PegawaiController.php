<?php

namespace App\Http\Controllers;

use App\Repositories\PegawaiRepository;
use App\Repositories\SekolahRepository;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
  public function data(PegawaiRepository $pegawai){
    $pegawai = $pegawai->all();
    return view('pegawai.data', compact('pegawai'));
  }

  public function tambahForm(SekolahRepository $sekolah){
    $sekolah = $sekolah->all();
    return view('pegawai.tambah', compact('sekolah'));
  }

  public function tambahSubmit(PegawaiRepository $pegawai, Request $request){
    $data =[];
    if ($request->foto) {
      $FotoExt = $request->foto->getClientOriginalExtension();
      $FotoName = "[$request->sekolah_id]$request->nama.$request->_token";
      $Foto = "{$FotoName}.{$FotoExt}";
      $path = $request->foto->move('img/pegawai', $Foto);
      $data = array_prepend($data, $path, 'foto');
    }
    $pegawai->store(array_merge($request->all(), $data));
    return redirect()->route('pegawaiData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }
}
