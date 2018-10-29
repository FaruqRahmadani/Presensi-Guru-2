<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\JenjangRepository;
use App\Repositories\KelurahanRepository;

class ApiController extends Controller
{
  public function dataKelurahan(KelurahanRepository $kelurahan, $kecamatanId){
    $kelurahan = $kelurahan->where('kecamatan_id', $kecamatanId);
    return $kelurahan;
  }

  public function dataJenjang(JenjangRepository $jenjang){
    return $jenjang->all();
  }
}
