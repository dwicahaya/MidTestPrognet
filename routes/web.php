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
    return view('index');
});

Route::resource('dosen','DosenController');
Route::get('dosen/{id}/edit','DosenController@edit');
Route::post('dosen/{id}/update','DosenController@update');
Route::get('dosen/{id}/delete','DosenController@destroy');

Route::resource('daftar','DaftrarController');
Route::get('daftar/{id}/edit','DaftrarController@edit');
Route::get('matkul/{id}/delete','MatkulController@destroy');

Route::resource('mahasiswa','MahasiswalController');
Route::get('mahasiswa/{id}/edit','MahasiswalController@edit');
Route::post('mahasiswa/{id}/update','MahasiswalController@update');
Route::get('mahasiswa/{id}/delete','MahasiswalController@destroy');




