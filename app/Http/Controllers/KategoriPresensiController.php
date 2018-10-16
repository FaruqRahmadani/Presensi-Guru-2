<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KategoriAbsenRepository;

class KategoriPresensiController extends Controller
{
  public function data(KategoriAbsenRepository $kategoriAbsen){
    $kategoriAbsen = $kategoriAbsen->all();
    return view('kategoriPresensi.data', compact('kategoriAbsen'));
  }

  public function tambahForm(){
    return view('kategoriPresensi.tambah');
  }

  public function tambahSubmit(KategoriAbsenRepository $kategoriAbsen, Request $request){
    $kategoriAbsen->store($request->all());
    return redirect()->route('kategoriPresensiData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }
}
