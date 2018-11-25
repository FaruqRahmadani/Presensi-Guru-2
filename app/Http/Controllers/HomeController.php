<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SekolahRepository;
use Auth;

class HomeController extends Controller
{
  public function dashboard(){
    $authTipe = Auth::User()->tipe;
    return $authTipe == 1? $this->dashboardSuperAdmin() : $this->dashboardAdminSekolah();
  }

  private function dashboardSuperAdmin(){
    return view('dashboard.superAdmin');
  }

  private function dashboardAdminSekolah(){
    $sekolah = new SekolahRepository;
    $sekolah = $sekolah->where('id', Auth::User()->sekolah_id)->first();
    return view('dashboard.adminSekolah', compact('sekolah'));
  }
}
