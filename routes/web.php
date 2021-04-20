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

// Login
Route::get('/login', function () {
    return view('pengguna.login');
});
Route::post('/postlogin' , 'LoginController@postlogin')->name('postlogin');
Route::get('/logout' , 'LoginController@logout')->name('logout');

// Registrasi
Route::get('/registrasi' , 'LoginController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi' , 'LoginController@simpanregistrasi')->name('simpanregistrasi');

// Admin
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/obat' , 'ObatController@index')->name('obat');
Route::post('/simpan-obat' , 'ObatController@store')->name('simpan-obat');
Route::get('/edit-obat/{id}' , 'ObatController@edit')->name('edit-obat');
Route::post('/update-obat/{id}' , 'ObatController@update')->name('update-obat');
Route::get('/delete-obat/{id}' , 'ObatController@destroy')->name('delete-obat');

Route::get('/datapengguna' , 'DatapenggunaController@index')->name('datapengguna');
Route::post('/simpan-datapengguna' , 'DatapenggunaController@store')->name('simpan-datapengguna');
Route::get('/delete-datapengguna/{id}' , 'DatapenggunaController@destroy')->name('delete-datapengguna');
