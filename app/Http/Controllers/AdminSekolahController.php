<?php

namespace App\Http\Controllers;

use App\Repositories\SekolahRepository;
use App\Repositories\UserRepository;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Validator;

class AdminSekolahController extends Controller
{
  public function data(UserRepository $user){
    $user = $user->where('tipe', 2);
    return view('adminSekolah.data', compact('user'));
  }

  public function tambahForm(SekolahRepository $sekolah){
    $sekolah = $sekolah->all();
    return view('adminSekolah.tambah', compact('sekolah'));
  }

  public function tambahSubmit(UserRepository $user, Request $request){
    $data = ['tipe' => 1];
    Validator::make($request->all(),[
      'username' => Rule::unique('users'),
    ])->validate();
    if ($request->foto) {
      $FotoExt = $request->foto->getClientOriginalExtension();
      $FotoName = "[admin_sekolah]$request->nama[$request->sekolah_id].$request->_token";
      $Foto = "{$FotoName}.{$FotoExt}";
      $path = $request->foto->move('img/user', $Foto);
      $data = array_prepend($data, $path, 'foto');
    }
    $user->store(array_merge($request->all(), $data));
    return redirect()->route('adminSekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }
}
