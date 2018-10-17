<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Validator;
use File;

class AdminController extends Controller
{
  public function data(UserRepository $user){
    $user = $user->where('tipe', 1);
    return view('admin.data', compact('user'));
  }

  public function tambahForm(){
    return view('admin.tambah');
  }

  public function tambahSubmit(UserRepository $user, Request $request){
    $data = ['tipe' => 1];
    Validator::make($request->all(),[
      'username' => Rule::unique('users'),
    ])->validate();
    if ($request->foto) {
      $FotoExt = $request->foto->getClientOriginalExtension();
      $FotoName = "[super_admin]$request->nama.$request->_token";
      $Foto = "{$FotoName}.{$FotoExt}";
      $path = $request->foto->move('img/user', $Foto);
      $data = array_prepend($data, $path, 'foto');
    }
    $user->store(array_merge($request->all(), $data));
    return redirect()->route('adminData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }

  public function editForm(UserRepository $user, $id){
    $user = $user->get($id);
    return view('admin.edit', compact('user'));
  }

  public function editSubmit(UserRepository $user, Request $request, $id){
    $data = [];
    $userAdmin = $user->get($id);
    Validator::make($request->all(),[
      'username' => Rule::unique('users')->ignore($userAdmin->id),
    ])->validate();
    if ($request->foto) {
      if (!str_is('*default.png', $userAdmin->foto)) {
        File::delete($userAdmin->foto);
      }
      $FotoExt = $request->foto->getClientOriginalExtension();
      $FotoName = "[super_admin]$request->nama.$request->_token";
      $Foto = "{$FotoName}.{$FotoExt}";
      $path = $request->foto->move('img/user', $Foto);
      $data = ['foto' => $path];
    }
    $user->update($id, array_merge($request->all(), $data));
    return redirect()->route('adminData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Diubah']);
  }
}
