<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
use Auth;
use Hash;
use File;

class ProfileController extends Controller
{
  public function editForm(){
    return view('profile.edit');
  }

  public function editSubmit(UserRepository $user, Request $request){
    $data = [];
    Validator::make(
      $request->all(),[
        'username' => Rule::unique('users')->ignore(Auth::user()->id),
        'password_old' => 'required_with:password',
        'password' => 'required_with:password_old|confirmed',
      ],
      $messages = [
        'password_old.required_with' => 'Password Lama Harus Diisi Jika Ingin Ganti Password',
        'password.required_with' => 'Password Baru Harus Diisi Setelah Password Lama Diisi',
      ]
    )->validate();
    $passwordOldConf = $request->password_old? (Hash::check($request->password_old, Auth::User()->password)? 1:0):1;
    if (!$passwordOldConf) return redirect()->back()->withInput()->with(['alert' => true, 'tipe' => 'error', 'judul' => 'Error', 'pesan' => 'Password Lama Salah']);
    if ($request->foto) {
      if (!str_is('*default.png', Auth::User()->foto)) {
        File::delete(Auth::User()->foto);
      }
      $FotoExt = $request->foto->getClientOriginalExtension();
      $FotoName = "[super_admin]$request->nama.$request->_token";
      $Foto = "{$FotoName}.{$FotoExt}";
      $path = $request->foto->move('img/user', $Foto);
      $data = ['foto' => $path];
    }
    $user->update(Auth::User()->id, array_merge($request->all(), $data));
    return redirect()->route('profileEditForm')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Profile Anda Telah Diubah']);
  }
}
