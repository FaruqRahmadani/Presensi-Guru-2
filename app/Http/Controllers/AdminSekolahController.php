<?php

namespace App\Http\Controllers;

use App\Repositories\SekolahRepository;
use App\Repositories\UserRepository;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Validator;
use File;

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
    $data = ['tipe' => 2];
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

  public function editForm(UserRepository $user, SekolahRepository $sekolah, $id){
    $sekolah = $sekolah->all();
    $user = $user->get($id);
    return view('adminSekolah.edit', compact('sekolah', 'user'));
  }

  public function editSubmit(UserRepository $user, Request $request, $id){
    $data = [];
    $userData = $user->get($id);
    Validator::make($request->all(),[
      'username' => Rule::unique('users')->ignore($userData->id),
    ])->validate();
    if ($request->foto) {
      if (!str_is('*default.png', $userData->foto)) {
        File::delete($userData->foto);
      }
      $FotoExt = $request->foto->getClientOriginalExtension();
      $FotoName = "[super_admin]$request->nama.$request->_token";
      $Foto = "{$FotoName}.{$FotoExt}";
      $path = $request->foto->move('img/user', $Foto);
      $data = ['foto' => $path];
    }
    $user->update($id, array_merge($request->all(), $data));
    return redirect()->route('adminSekolahData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Diubah']);
  }
}
