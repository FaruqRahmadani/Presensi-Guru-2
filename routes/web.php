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

Route::Group(['middleware' => ['AuthMiddleware']], function(){
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

  // halaman dashboard
  Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
  });

  // halaman pegawai
  Route::get('/pegawai/data', function () {
    return view('pegawai.data');
  });
  Route::get('/pegawai/tambah', function () {
    return view('pegawai.tambah');
  });
  Route::group(['prefix' => 'status-sekolah', 'as' => 'statusSekolah'], function () {
    Route::get('', 'StatusSekolahController@data')->name('Data');
    Route::get('tambah', 'StatusSekolahController@tambahForm')->name('TambahForm');
    Route::post('tambah', 'StatusSekolahController@tambahSubmit')->name('TambahSubmit');
    Route::get('{id}/edit', 'StatusSekolahController@editForm')->name('EditForm');
    Route::post('{id}/edit', 'StatusSekolahController@editSubmit')->name('EditSubmit');
    Route::get('hapus/{id?}', 'StatusSekolahController@hapus')->name('Hapus');
  });
  Route::group(['prefix' => 'admin-sekolah', 'as' => 'adminSekolah'], function () {
    Route::get('', 'AdminSekolahController@data')->name('Data');
    Route::get('tambah', function () {
      return view('adminSekolah.tambah');
    })->name('TambahForm');
  });
  // halam data sekolah
  Route::get('/sekolah/data', function () {
    return view('sekolah.data');
  });
  Route::get('/sekolah/tambah', function () {
    return view('sekolah.tambah');
  });
  Route::group(['prefix' => 'kategori-presensi', 'as' => 'kategoriPresensi'], function () {
    Route::get('', 'KategoriPresensiController@data')->name('Data');
    Route::get('tambah', 'KategoriPresensiController@tambahForm')->name('TambahForm');
    Route::post('tambah', 'KategoriPresensiController@tambahSubmit')->name('TambahSubmit');
    Route::get('{id}/edit', 'KategoriPresensiController@editForm')->name('EditForm');
    Route::post('{id}/edit', 'KategoriPresensiController@editSubmit')->name('EditSubmit');
    Route::get('hapus/{id?}', 'KategoriPresensiController@hapus')->name('Hapus');
  });
  Route::group(['prefix' => 'jenjang', 'as' => 'jenjang'], function () {
    Route::get('', 'JenjangController@data')->name('Data');
    Route::get('tambah', 'JenjangController@tambahForm')->name('TambahForm');
    Route::post('tambah', 'JenjangController@tambahSubmit')->name('TambahSubmit');
    Route::get('{id}/edit', 'JenjangController@editForm')->name('EditForm');
    Route::post('{id}/edit', 'JenjangController@editSubmit')->name('EditSubmit');
    Route::get('hapus/{id?}', 'JenjangController@hapus')->name('Hapus');
  });
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
