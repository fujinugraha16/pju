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

Route::get('/', 'DataPJUController@index')->name('index');
Route::get('/sudah-diperbaiki', 'DataPJUController@sudahDiperbaiki')->name('sudahDiperbaiki');
Route::get('/belum-diperbaiki', 'DataPJUController@belumDiperbaiki')->name('belumDiperbaiki');
Route::post('/tambah-data', 'DataPJUController@tambahData')->name('tambahData');
Route::post('/edit-data/{id}', 'DataPJUController@editData')->name('editData');
Route::post('/hapus-data', 'DataPJUController@hapusData')->name('hapusData');
Route::post('/update-status-data', 'DataPJUController@updateStatusData')->name('updateStatusData');
Route::post('/export', 'DataPJUController@export')->name('export');
