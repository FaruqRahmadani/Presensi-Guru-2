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

// halaman data sekolah .
Route::get('/admin-sekolah/data', function () {
    return view('adminSekolah.data');
});
Route::get('/admin-sekolah/tambah', function () {
    return view('adminSekolah.tambah');
});