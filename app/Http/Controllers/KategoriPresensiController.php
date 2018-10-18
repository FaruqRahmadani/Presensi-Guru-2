<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\KategoriAbsenRepository;

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

  public function editForm(KategoriAbsenRepository $kategoriAbsen, $id){
    $kategoriAbsen = $kategoriAbsen->get($id);
    return view('kategoriPresensi.edit', compact('kategoriAbsen'));
  }

  public function editSubmit(KategoriAbsenRepository $kategoriAbsen, Request $request, $id){
    $kategoriAbsen->update($id, $request->all());
    return redirect()->route('kategoriPresensiData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Diubah']);
  }

  public function hapus(KategoriAbsenRepository $kategoriAbsen, $id){
    $kategoriAbsen->delete($id);
    return redirect()->route('kategoriPresensiData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Dihapus']);
  }
}
