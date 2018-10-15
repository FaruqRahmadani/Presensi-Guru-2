<?php

namespace App\Http\Controllers;

use App\Repositories\StatusRepository;
use Illuminate\Http\Request;

class StatusSekolahController extends Controller
{
  public function data(StatusRepository $status){
    $status = $status->all();
    return view('statusSekolah.data', compact('status'));
  }

  public function tambahForm(){
    return view('statusSekolah.tambah');
  }

  public function tambahSubmit(StatusRepository $status, Request $request){
    $status->store($request->all());
    return redirect()->route('statusSekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }

  public function editForm(StatusRepository $status, $id){
    $status = $status->get($id);
    return view('statusSekolah.edit', compact('status'));
  }
}
