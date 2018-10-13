<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Layouts.master');
});

// Template
Route::get('/template/chart', function () {
    return view('template.chart');
});
Route::get('/template/data', function () {
    return view('template.data');
});
Route::get('/template/form', function () {
    return view('template.form');
});

Route::get('/data-presensi/data', function () {
    return view('dataPresensi.data');
});
// halaman data admin
Route::get('/data-admin/data', function () {
    return view('dataAdmin.data');
});
Route::get('/data-admin/tambah', function () {
    return view('dataAdmin.tambah');
});
// halaman login
Route::get('/login', function () {
    return view('depan.login');
});
Route::get('/lupa-password', function () {
    return view('depan.lupaPassword');
});

// halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

// halaman depan
Route::get('/depan', function () {
    return view('template.templateDepan');
});
