<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenjangController extends Controller
{
  public function data(){
    return view('jenjangSekolah.data');
  }
}
