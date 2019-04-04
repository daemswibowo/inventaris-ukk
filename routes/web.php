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
  return redirect(route('home'));
});

Auth::routes();

Route::middleware('auth')->group(function () {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('pegawai', 'PegawaiController');
  Route::resource('jenis', 'JenisController');
  Route::resource('ruang', 'RuangController');
  Route::resource('inventaris', 'InventarisController');
  Route::resource('peminjaman', 'PeminjamanController');
  Route::resource('detail-pinjam', 'DetailPinjamController');
});
