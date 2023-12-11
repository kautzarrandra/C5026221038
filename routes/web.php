<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('halo', function () {
    return "halo apa kabar";
});

Route::get('halo2', function () {
    return "<h1>halo apa kabar</h1>";
});

Route::get('blog1', function () {
    return view('blog');
});

Route::get('ETS', function () {
    return view('ranktzr');
});

Route::get('badges', function () {
    return view('badges1');
});

Route::get('contextual', function () {
    return view('badges2');
});

Route::get('pill', function () {
    return view('badges3');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('layouting', function () {
    return view('layouting');
});

Route::get('calculator', function () {
    return view('calculator');
});

Route::get('regist', function () {
    return view('checking');
});

// route blog
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUD nilaikuliah
Route::get('/nilai','App\Http\Controllers\NilaiController@index');
Route::get('/nilai/add','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store');

//route CRUD keranjangbelanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//route CRUD minuman
Route::get('/minuman','App\Http\Controllers\MinumanController@index');
Route::get('/minuman/tambah','App\Http\Controllers\MinumanController@tambah');
Route::post('/minuman/store','App\Http\Controllers\MinumanController@store');
Route::get('/minuman/edit/{id}','App\Http\Controllers\MinumanController@edit');
Route::post('/minuman/update','App\Http\Controllers\MinumanController@update');
Route::get('/minuman/hapus/{id}','App\Http\Controllers\MinumanController@hapus');
Route::get('/minuman/cari','App\Http\Controllers\MinumanController@cari');

//route RU mahasiswa
Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa/edit/{id}','App\Http\Controllers\MahasiswaController@edit');
Route::post('/mahasiswa/update','App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswa/view/{id}','App\Http\Controllers\MahasiswaController@view');
