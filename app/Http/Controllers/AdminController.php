<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Validator;

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
    Validator::make($request->all(),[
      'username' => Rule::unique('users'),
    ])->validate();
    $FotoExt = $request->foto->getClientOriginalExtension();
    $FotoName = "[super_admin]$request->nama.$request->_token";
    $Foto = "{$FotoName}.{$FotoExt}";
    $path = $request->foto->move('img/user', $Foto);
    $user->store(array_merge($request->all(), ['tipe' => 1, 'foto' => $path]));
    return redirect()->route('adminData')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Berhasil Ditambahkan']);
  }
}
