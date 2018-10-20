<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSekolahController extends Controller
{
  public function data(){
    return view('adminSekolah.data');
  }
}
