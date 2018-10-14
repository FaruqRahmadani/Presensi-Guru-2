<?php

namespace App\Http\Controllers;

use App\Repositories\JenjangRepository;
use Illuminate\Http\Request;

class JenjangController extends Controller
{
  public function data(JenjangRepository $jenjang){
    $jenjang = $jenjang->all();
    return view('jenjangSekolah.data', compact('jenjang'));
  }

  public function tambahForm(){
    return view('jenjangSekolah.tambah');
  }

  public function tambahSubmit(JenjangRepository $jenjang, Request $request){
    $jenjang->store($request->all());
    return redirect()->route('jenjangData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }

  public function editForm(JenjangRepository $jenjang, $id){
    $jenjang = $jenjang->get($id);
    return view('jenjangSekolah.edit', compact('jenjang'));
  }

  public function editSubmit(JenjangRepository $jenjang, Request $request, $id){
    $jenjang->update($id, $request->all());
    return redirect()->route('jenjangData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Diubah']);
  }
}
