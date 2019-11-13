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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/imamJumat', 'imamJumat@index')->name('imamJumatIndex');
Route::get('/keuangan', 'keuangan@index')->name('keuanganIndex');
Route::get('/inventarisMasjid', 'inventarisMasjid@index')->name('inventarisMasjidIndex');
Route::get('/jadwalKajian', 'jadwalKajian@index')->name('jadwalKajianIndex');
Route::get('/parkir', 'parkir@index')->name('parkirIndex');
Route::get('/imamJumat/insert', 'imamJumat@create')->name('imamJumatCreate');
Route::post('/imamJumat/submit', 'imamJumat@store');
Route::get('/inventarisMasjid/insert', 'inventarisMasjid@create')->name('inventarisMasjidCreate');
Route::post('/inventarisMasjid/submit', 'inventarisMasjid@store');
Route::get('/jadwalKajian/insert', 'jadwalKajian@create')->name('jadwalKajianCreate');
Route::post('/jadwalKajian/submit', 'jadwalKajian@store')->name('jadwalKajianSubmit');
Route::post('/parkir/submit',  'parkir@store')->name('parkirSubmit');
Route::get('/parkir/pendaftar', 'parkir@lihatPendaftar')->name('parkirPendaftar');
Route::post('/parkir/validate', 'parkir@validasi')->name('parkirValidate');

