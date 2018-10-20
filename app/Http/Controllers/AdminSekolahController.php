<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class AdminSekolahController extends Controller
{
  public function data(UserRepository $user){
    $user = $user->where('tipe', 2);
    return view('adminSekolah.data', compact('user'));
  }
}
