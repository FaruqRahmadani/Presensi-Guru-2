<?php

namespace App\Http\Controllers;

use App\Repositories\StatusRepository;
use Illuminate\Http\Request;

class StatusSekolahController extends Controller
{
  public function data(StatusRepository $status){
    $status = $status->all();
    return view('statusSekolah.data', compact('status'));
  }
}
