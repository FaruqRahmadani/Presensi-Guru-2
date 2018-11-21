<?php

namespace App\Http\Controllers;

use App\Repositories\KecamatanRepository;
use App\Repositories\KelurahanRepository;
use App\Repositories\SekolahRepository;
use App\Repositories\JenjangRepository;
use App\Repositories\StatusRepository;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
  public function data(SekolahRepository $sekolah){
    $sekolah = $sekolah->all();
    return view('sekolah.data', compact('sekolah'));
  }

  public function tambahForm(JenjangRepository $jenjang, StatusRepository $status, KecamatanRepository $kecamatan){
    $jenjang = $jenjang->all();
    $status = $status->all();
    $kecamatan = $kecamatan->all();
    return view('sekolah.tambah', compact('jenjang', 'status', 'kecamatan'));
  }

  public function tambahSubmit(SekolahRepository $sekolah, Request $request){
    $sekolah->store($request->all());
    return redirect()->route('sekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }

  public function editForm(SekolahRepository $sekolah, JenjangRepository $jenjang, StatusRepository $status, KecamatanRepository $kecamatan, KelurahanRepository $kelurahan, $id){
    $sekolah = $sekolah->get($id);
    $jenjang = $jenjang->all();
    $status = $status->all();
    $kecamatan = $kecamatan->all();
    $kelurahan = $kelurahan->where('kecamatan_id' ,$sekolah->kecamatan_id)->get();
    return view('sekolah.edit', compact('sekolah', 'jenjang', 'status', 'kecamatan', 'kelurahan'));
  }

  public function editSubmit(SekolahRepository $sekolah, Request $request, $id){
    $sekolah->update($id, $request->all());
    return redirect()->route('sekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Diubah']);
  }

  public function hapus(SekolahRepository $sekolah, $id){
    $sekolah->delete($id);
    return redirect()->route('sekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Dihapus']);
  }
}
