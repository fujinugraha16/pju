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

Route::get('/', 'DataPJUController@index');
Route::get('/sudah-diperbaiki', 'DataPJUController@sudahDiperbaiki');
Route::get('/belum-diperbaiki', 'DataPJUController@belumDiperbaiki');
