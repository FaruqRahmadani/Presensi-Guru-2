<?php

namespace App\Http\Controllers;

use App\Repositories\JamKerjaRepository;
use App\Repositories\SekolahRepository;
use Illuminate\Http\Request;
use Auth;

class JamKerjaController extends Controller
{
  public function data(SekolahRepository $sekolah, JamKerjaRepository $jamKerja){
    $sekolah = $sekolah->get(Auth::User()->sekolah_id);
    $jamKerja = $jamKerja->where('sekolah_id', Auth::User()->sekolah_id)->sortBy('hari');
    return view('jamKerja.data', compact('jamKerja', 'sekolah'));
  }

  public function tambahForm(JamKerjaRepository $jamKerja){
    $hariPicked = collect($jamKerja->where('sekolah_id', Auth::User()->sekolah_id)->pluck('hari'));
    return view('jamKerja.tambah', compact('sekolah', 'hariPicked'));
  }

  public function tambahSubmit(Request $request, JamKerjaRepository $jamKerja){
    $data = ['sekolah_id' => Auth::User()->sekolah_id];
    $jamKerja->store(array_merge($request->all(), $data));
    return redirect()->route('jamKerjaData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }

  public function editForm(JamKerjaRepository $jamKerja, $id){
    $hariPicked = collect($jamKerja->where('sekolah_id', Auth::User()->sekolah_id)->pluck('hari'));
    $jamKerja = $jamKerja->get($id);
    return view('jamKerja.Edit', compact('jamKerja', 'hariPicked'));
  }

  public function editSubmit(Request $request, JamKerjaRepository $jamKerja, $id){
    $jamKerja->update($id, $request->all());
    return redirect()->route('jamKerjaData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Diubah']);
  }
}
