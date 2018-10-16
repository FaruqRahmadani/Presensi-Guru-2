<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class AdminController extends Controller
{
  public function data(UserRepository $user){
    $user = $user->where('tipe', 1);
    return view('admin.data', compact('user'));
  }
}
