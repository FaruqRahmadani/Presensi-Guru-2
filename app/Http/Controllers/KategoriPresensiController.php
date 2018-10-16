<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KategoriAbsenRepository;

class KategoriPresensiController extends Controller
{
  public function data(KategoriAbsenRepository $kategoriAbsen){
    $kategoriAbsen = $kategoriAbsen->all();
    return view('kategoriPresensi.data', compact('kategoriAbsen'));
  }
}
