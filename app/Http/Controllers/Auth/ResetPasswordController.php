<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class ResetPasswordController extends Controller
{
  public function form(){
    return view('auth.reset');
  }

  public function submit(Request $request, UserRepository $user){
    $user = $user->where('username', $request->input)->orWhere('email', $request->input)->first();
    dd($user);
  }
}
