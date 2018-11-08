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

Route::Group(['middleware' => 'AuthMiddleware'], function(){
  Route::get('', 'HomeController@dashboard')->name('dashboard');

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
    return view('presensi.data');
  });
  Route::Group(['middleware' => 'SuperAdminMiddleware'], function(){
    Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
      Route::get('', 'AdminController@data')->name('Data');
      Route::get('tambah', 'AdminController@tambahForm')->name('TambahForm');
      Route::post('tambah', 'AdminController@tambahSubmit')->name('TambahSubmit');
      Route::get('{id}/edit', 'AdminController@editForm')->name('EditForm');
      Route::post('{id}/edit', 'AdminController@editSubmit')->name('EditSubmit');
      Route::get('hapus/{id?}', 'AdminController@hapus')->name('Hapus');
    });

    Route::group(['prefix' => 'pegawai', 'as' => 'pegawai'], function () {
      Route::get('', 'PegawaiController@data')->name('Data');
      Route::get('tambah', 'PegawaiController@tambahForm')->name('TambahForm');
      Route::post('tambah', 'PegawaiController@tambahSubmit')->name('TambahSubmit');
      Route::get('{id}/edit', 'PegawaiController@editForm')->name('EditForm');
      Route::post('{id}/edit', 'PegawaiController@editSubmit')->name('EditSubmit');
      Route::get('hapus/{id?}', 'PegawaiController@hapus')->name('Hapus');
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
      Route::get('tambah', 'AdminSekolahController@tambahForm')->name('TambahForm');
      Route::post('tambah', 'AdminSekolahController@tambahSubmit')->name('TambahSubmit');
      Route::get('{id}/edit', 'AdminSekolahController@editForm')->name('EditForm');
      Route::post('{id}/edit', 'AdminSekolahController@editSubmit')->name('EditSubmit');
      Route::get('hapus/{id?}', 'AdminSekolahController@hapus')->name('Hapus');
    });
    Route::group(['prefix' => 'sekolah', 'as' => 'sekolah'], function () {
      Route::get('', 'SekolahController@data')->name('Data');
      Route::get('tambah', 'SekolahController@tambahForm')->name('TambahForm');
      Route::post('tambah', 'SekolahController@tambahSubmit')->name('TambahSubmit');
      Route::get('{id}/edit', 'SekolahController@editForm')->name('EditForm');
      Route::post('{id}/edit', 'SekolahController@editSubmit')->name('EditSubmit');
      Route::get('hapus/{id?}', 'SekolahController@hapus')->name('Hapus');
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
    Route::group(['prefix' => 'profile', 'as' => 'profile'], function () {
      Route::get('', 'ProfileController@editForm')->name('EditForm');
      Route::post('', 'ProfileController@editSubmit')->name('EditSubmit');
    });
  });
  Route::Group(['middleware' => 'AdminSekolahMiddleware'], function(){
    Route::group(['prefix' => 'pegawai-sekolah', 'as' => 'pegawaiSekolah'], function () {
      Route::get('', 'PegawaiSekolahController@data')->name('Data');
      Route::get('tambah', 'PegawaiSekolahController@tambahForm')->name('TambahForm');
      Route::post('tambah', 'PegawaiSekolahController@tambahSubmit')->name('TambahSubmit');
      Route::get('{id}/edit', 'PegawaiSekolahController@editForm')->name('EditForm');
      Route::post('{id}/edit', 'PegawaiSekolahController@editSubmit')->name('EditSubmit');
      Route::get('hapus/{id?}', 'PegawaiSekolahController@hapus')->name('Hapus');
    });
  });
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
