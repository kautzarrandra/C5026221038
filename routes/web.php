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

Route::get('blog', function () {
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

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
