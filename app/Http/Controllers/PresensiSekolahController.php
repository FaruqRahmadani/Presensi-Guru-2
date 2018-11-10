<?php

namespace App\Http\Controllers;

use App\Imports\PresensiImport;
use Illuminate\Http\Request;
use Excel;

class PresensiSekolahController extends Controller
{
  public function data(){
    return view('presensiSekolah.data');
  }

  public function info(){
    return view('presensiSekolah.info');
  }

  public function inputForm(){
    return view('presensiSekolah.input');
  }

  public function inputSubmit(Request $request){
    $fileExt = $request->berkas->getClientOriginalExtension();
    if ($fileExt != "xlsx") return redirect()->back()->with(['alert' => true, 'tipe' => 'error', 'judul' => 'File', 'pesan' => 'File Yang Di Upload Salah']);
    $import = Excel::toCollection(new PresensiImport, $request->berkas)->flatten(1);
    $filtered = $import->reject(function ($value, $key) {
      foreach ($value as $data) {
        if (!$data) {
          return $value;
        }
      }
    })->sortBy('tanggal');
    return $this->inputConfirm($filtered);
  }

  public function inputConfirm($data){
    dd($data);
  }
}
