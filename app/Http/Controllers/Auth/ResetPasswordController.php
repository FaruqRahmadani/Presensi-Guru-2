<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PasswordResetRepository;
use App\Repositories\UserRepository;
use App\Mail\ResetPassword;
use Mail;

class ResetPasswordController extends Controller
{
  public function form(){
    return view('auth.reset');
  }

  public function submit(Request $request, UserRepository $user){
    $user = $user->where('username', $request->input)->orWhere('email', $request->input)->first();
    if (!$user) return redirect()->back()->with(['alert' => true, 'tipe' => 'error', 'judul' => 'Error', 'pesan' => 'Username / E-Mail Tidak Ditemukan']);
    if ($user->PasswordReset->count() && ($user->LastPasswordReset->created_at->addMinutes(10) > now())) return redirect()->back()->with(['alert' => true, 'tipe' => 'warning', 'judul' => 'Warning', 'pesan' => 'Anda Baru Saja Meminta Alamat Ganti Password, Tunggu Hingga 10 menit dan coba lagi']);
    $userNama = encrypt($user->nama);
    $userId = encrypt($user->id);
    $token = substr(str_shuffle("$userId$userNama"), 0, 255);
    $resetPassword = $user->PasswordReset()->create([
      'token' => $token,
      'email' => $user->email,
      'user_id' => $user->id,
    ]);
    Mail::to($user->email)->send(new ResetPassword($user));
  }

  public function setPasswordForm($token, PasswordResetRepository $passwordReset){
    $passwordReset = $passwordReset->where('token', $token)->first();
    if ((!$passwordReset->status) || ($passwordReset->created_at->addHours(6) < now())) return redirect()->route('login')->with(['alert' => true, 'tipe' => 'error', 'judul' => 'Error', 'pesan' => 'Alamat Link Ganti Password Expired']);
    $user = $passwordReset->User;
    return view('auth.setPassword', compact('user', 'token'));
  }

  public function setPasswordSubmit($token, Request $request, PasswordResetRepository $passwordReset, UserRepository $user){
    $this->validate($request, [
      'password' => 'confirmed',
    ]);
    $passwordReset = $passwordReset->where('token', $token);
    $user->update($passwordReset->first()->User->id, $request->all());
    $apa = $passwordReset->update(['status' => 0]);
    return redirect()->route('login')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Password Telah Diganti, Silahkan Login']);
  }
}
