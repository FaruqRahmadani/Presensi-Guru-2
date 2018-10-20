<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\SekolahRepository;
use Illuminate\Http\Request;

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
}
