<?php

namespace App\Http\Controllers;

use App\Repositories\SekolahRepository;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
  public function data(SekolahRepository $sekolah){
    $sekolah = $sekolah->all();
    return view('sekolah.data', compact('sekolah'));
  }
}
