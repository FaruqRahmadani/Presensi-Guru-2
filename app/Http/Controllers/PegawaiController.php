<?php

namespace App\Http\Controllers;

use App\Repositories\PegawaiRepository;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
  public function data(PegawaiRepository $pegawai){
    $pegawai = $pegawai->all();
    return view('pegawai.data', compact('pegawai'));
  }

  public function tambahForm(){
    return view('pegawai.tambah');
  }
}
