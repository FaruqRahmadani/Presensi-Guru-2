<?php

namespace App\Http\Controllers;

use App\Repositories\JenjangRepository;
use Illuminate\Http\Request;

class JenjangController extends Controller
{
  public function data(JenjangRepository $jenjang){
    $jenjang = $jenjang->all();
    return view('jenjangSekolah.data', compact('jenjang'));
  }

  public function tambahForm(){
    return view('jenjangSekolah.tambah');
  }
}
