<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
  public function dashboard(){
    $authTipe = Auth::User()->tipe;
    return $authTipe == 1? $this->dashboardSuperAdmin() : $this->dashboardAdminSekolah();
  }

  public function dashboardSuperAdmin(){
    return view('dashboard.superAdmin');
  }

  public function dashboardAdminSekolah(){
    return view('dashboard.adminSekolah');
  }
}
