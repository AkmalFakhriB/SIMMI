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
Route::post('/imamJumat/delete', 'imamJumat@delete')->name('imamJumatDelete');
Route::post('/imamJumat/edit', 'imamJumat@edit')->name('imamJumatEdit');
Route::post('/imamJumat/update', 'imamJumat@update')->name('imamJumatUpdate');
Route::get('/imamJumat/insert', 'imamJumat@create')->name('imamJumatCreate');
Route::post('/imamJumat/submit', 'imamJumat@store');

Route::get('/keuangan', 'keuangan@index')->name('keuanganIndex');

Route::get('/inventarisMasjid', 'inventarisMasjid@index')->name('inventarisMasjidIndex');
Route::post('/inventarisMasjid/edit', 'inventarisMasjid@edit')->name('inventarisMasjidEdit');
Route::post('/inventarisMasjid/update', 'inventarisMasjid@update')->name('inventarisMasjidUpdate');
Route::get('/inventarisMasjid/insert', 'inventarisMasjid@create')->name('inventarisMasjidCreate');
Route::post('/inventarisMasjid/submit', 'inventarisMasjid@store');

Route::get('/jadwalKajian', 'jadwalKajian@index')->name('jadwalKajianIndex');
Route::get('/jadwalKajian/insert', 'jadwalKajian@create')->name('jadwalKajianCreate');
Route::post('/jadwalKajian/submit', 'jadwalKajian@store')->name('jadwalKajianSubmit');
Route::post('/jadwalKajian/edit', 'jadwalKajian@edit')->name('jadwalKajianEdit');
Route::post('/jadwalKajian/update', 'jadwalKajian@update')->name('jadwalKajianUpdate');

Route::get('/parkir', 'parkir@index')->name('parkirIndex');
Route::post('/parkir/submit',  'parkir@store')->name('parkirSubmit');
Route::get('/parkir/pendaftar', 'parkir@lihatPendaftar')->name('parkirPendaftar');
Route::post('/parkir/validate', 'parkir@validasi')->name('parkirValidate');

