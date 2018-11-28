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

  public function setPassword($token, PasswordResetRepository $passwordReset){
    $passwordReset = $passwordReset->where('token', $token)->first();
    dd($passwordReset->User);
  }
}
