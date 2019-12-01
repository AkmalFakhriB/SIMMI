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

// Route::get('/', function () {
    
//     return view('welcome');
// });

Route::get('/', 'berita@index')->name('beritaIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/berita/insert', 'berita@create')->name('beritaCreate');
Route::post('/berita/submit', 'berita@store')->name('beritaSubmit');
Route::get('/berita/daftar', 'berita@daftar')->name('beritaDaftar');
Route::post('/berita/edit', 'berita@edit')->name('beritaEdit');
Route::post('/berita/update', 'berita@update')->name('beritaUpdate');

Route::get('/imamJumat', 'imamJumat@index')->name('imamJumatIndex');
Route::post('/imamJumat/delete', 'imamJumat@delete')->name('imamJumatDelete');
Route::post('/imamJumat/edit', 'imamJumat@edit')->name('imamJumatEdit');
Route::post('/imamJumat/update', 'imamJumat@update')->name('imamJumatUpdate');
Route::get('/imamJumat/insert', 'imamJumat@create')->name('imamJumatCreate');
Route::post('/imamJumat/submit', 'imamJumat@store')->name('imamJumatSubmit');

Route::get('/keuangan', 'keuangan@index')->name('keuanganIndex');
Route::get('/keuangan/insert', 'keuangan@create')->name('keuanganCreate');
Route::post('/keuangan/submit', 'keuangan@store')->name('keuanganSubmit');
Route::post('/keuangan/download', 'keuangan@Download')->name('keuanganDownload');

Route::get('/inventarisMasjid', 'inventarisMasjid@index')->name('inventarisMasjidIndex');
Route::post('/inventarisMasjid/edit', 'inventarisMasjid@edit')->name('inventarisMasjidEdit');
Route::post('/inventarisMasjid/update', 'inventarisMasjid@update')->name('inventarisMasjidUpdate');
Route::get('/inventarisMasjid/insert', 'inventarisMasjid@create')->name('inventarisMasjidCreate');
Route::post('/inventarisMasjid/submit', 'inventarisMasjid@store')->name('inventarisMasjidSubmit');

Route::get('/jadwalKajian', 'jadwalKajian@index')->name('jadwalKajianIndex');
Route::get('/jadwalKajian/insert', 'jadwalKajian@create')->name('jadwalKajianCreate');
Route::post('/jadwalKajian/submit', 'jadwalKajian@store')->name('jadwalKajianSubmit');
Route::post('/jadwalKajian/edit', 'jadwalKajian@edit')->name('jadwalKajianEdit');
Route::post('/jadwalKajian/update', 'jadwalKajian@update')->name('jadwalKajianUpdate');

Route::get('/parkir', 'parkir@index')->name('parkirIndex');
Route::post('/parkir/submit',  'parkir@store')->name('parkirSubmit');
Route::get('/parkir/pendaftar', 'parkir@lihatPendaftar')->name('parkirPendaftar');
Route::post('/parkir/validate', 'parkir@validasi')->name('parkirValidate');

Route::get('/userKegiatan/list', 'userKegiatan@list')->name('userKegiatanList');
Route::post('/userKegiatan/daftar', 'userKegiatan@daftar')->name('userKegiatanDaftar');
Route::get('/userKegiatan/index', 'userKegiatan@index')->name('userKegiatanIndex');

Route::get('/barangTertinggal', 'barangTertinggal@index')->name('barangTertinggalIndex');
Route::get('/barangTertinggal/insert', 'barangTertinggal@create')->name('barangTertinggalCreate');
Route::post('/barangTertinggal/submit', 'barangTertinggal@store')->name('barangTertinggalSubmit');

Route::get('/jadwalPuasa', 'jadwalPuasa@index')->name('jadwalPuasaIndex');
Route::get('/jadwalPuasa/insert', 'jadwalPuasa@create')->name('jadwalPuasaCreate');
Route::post('/jadwalPuasa/submit', 'jadwalPuasa@store')->name('jadwalPuasaSubmit');
Route::post('/jadwalPuasa/edit', 'jadwalPuasa@edit')->name('jadwalPuasaEdit');
Route::post('/jadwalPuasa/update', 'jadwalPuasa@update')->name('jadwalPuasaUpdate');
Route::post('/jadwalPuasa/delete', 'jadwalPuasa@delete')->name('jadwalPuasaDelete');
