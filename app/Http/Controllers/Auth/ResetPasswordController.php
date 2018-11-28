<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResetPasswordController extends Controller
{
  public function form(){
    return view('auth.reset');
  }

  public function submit(Request $request){
    dd($request);
  }
}
