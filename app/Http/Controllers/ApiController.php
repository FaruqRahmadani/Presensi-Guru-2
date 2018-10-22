<?php

namespace App\Http\Controllers;

use App\Repositories\KelurahanRepository;
use Illuminate\Http\Request;
use App\Pegawai;

class ApiController extends Controller
{
  public function dataKelurahan(KelurahanRepository $kelurahan, $kecamatanId){
    $kelurahan = $kelurahan->where('kecamatan_id', $kecamatanId);
    return $kelurahan;
  }

  public function dataPegawai($length=10){
    return Pegawai::paginate($length);
  }
}
