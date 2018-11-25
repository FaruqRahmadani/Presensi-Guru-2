<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data/kelurahan/{kecamatanId}', 'ApiController@dataKelurahan');
Route::get('data/jenjang', 'ApiController@dataJenjang');
Route::get('data/sekolah', 'ApiController@dataSekolah');
Route::get('data/statistik-presensi/{idSekolah}', 'ApiController@dataStatistikPresensi');
