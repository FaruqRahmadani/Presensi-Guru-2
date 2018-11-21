<?php

namespace App\Http\Controllers;

use App\Repositories\PegawaiRepository;
use App\Repositories\SekolahRepository;
use Illuminate\Http\Request;
use Auth;
use File;

class PegawaiSekolahController extends Controller
{
  public function data(PegawaiRepository $pegawai, SekolahRepository $sekolah){
    $pegawai = $pegawai->where('sekolah_id', Auth::User()->Sekolah->id)->get();
    $sekolah = $sekolah->get(Auth::User()->Sekolah->id);
    return view('pegawaiSekolah.data', compact('pegawai', 'sekolah'));
  }

  public function tambahForm(SekolahRepository $sekolah){
    $sekolah = $sekolah->get(Auth::User()->Sekolah->id);
    return view('pegawaiSekolah.tambah', compact('sekolah'));
  }

  public function tambahSubmit(Request $request, PegawaiRepository $pegawai){
    $sekolahId = Auth::User()->sekolah_id;
    $data = ['sekolah_id' => $sekolahId];
    if ($request->foto) {
      $FotoExt = $request->foto->getClientOriginalExtension();
      $FotoName = "[$sekolahId]$request->nama.$request->_token";
      $Foto = "{$FotoName}.{$FotoExt}";
      $path = $request->foto->move('img/pegawai', $Foto);
      $data = array_prepend($data, $path, 'foto');
    }
    $pegawai->store(array_merge($request->all(), $data));
    return redirect()->route('pegawaiSekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }

  public function editForm(SekolahRepository $sekolah, PegawaiRepository $pegawai, $id){
    $sekolah = $sekolah->get(Auth::User()->Sekolah->id);
    $pegawai = $pegawai->get($id);
    return view('pegawaiSekolah.edit', compact('sekolah', 'pegawai'));
  }

  public function editSubmit(Request $request, PegawaiRepository $pegawai, $id){
    $data = [];
    $sekolahId = Auth::User()->sekolah_id;
    $dataPegawai = $pegawai->get($id);
    if ($request->foto) {
      if (!str_is('*default.png', $dataPegawai->foto)) {
        File::delete($dataPegawai->foto);
      }
      $FotoExt = $request->foto->getClientOriginalExtension();
      $FotoName = "[$sekolahId]$request->nama.$request->_token";
      $Foto = "{$FotoName}.{$FotoExt}";
      $path = $request->foto->move('img/pegawai', $Foto);
      $data = array_prepend($data, $path, 'foto');
    }
    $pegawai->update($id, array_merge($request->all(), $data));
    return redirect()->route('pegawaiSekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Diubah']);
  }

  public function hapus(PegawaiRepository $pegawai, $id){
    $dataPegawai = $pegawai->get($id);
    if (!str_is('*default.png', $dataPegawai->foto)) {
      File::delete($dataPegawai->foto);
    }
    $pegawai->delete($id);
    return redirect()->route('pegawaiSekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Dihapus']);
  }
}
