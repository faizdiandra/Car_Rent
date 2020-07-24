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
Route::get('/', 'pagecontroller@home');

Route::get('/rental', "Rental@index");
Route::get('/mobil', "Mobil@index");

Route::get('/mobil_create', 'Mobil@create'); 
Route::get('/mobil/create', 'Mobil@create');
Route::post('/mobil/store', 'Mobil@store');

Route::get('/mobil/edit/{id}', 'Mobil@edit');
Route::post('/mobil/update', 'Mobil@update');

Route::get('/mobil/show/{id}', "Mobil@show");

Route::get('/mobil/hapus/{id}', 'mobil@hapus');

Route::get('/user', "User@index");

Route::get('/user_create', 'User@create'); 
Route::get('/user/create', 'User@create');
Route::post('/user/store', 'User@store');

Route::get('/user/edit/{id}', 'User@edit');
Route::post('/user/update', 'User@update');

Route::get('/user/show/{id}', "User@show");

Route::get('/user/hapus/{id}', 'user@hapus');
Auth::routes();

Route::get('/peminjaman', "Peminjaman@index");

Route::get('/peminjaman_create', 'Peminjaman@create'); 
Route::get('/peminjaman/create', 'Peminjaman@create');
Route::post('/peminjaman/store', 'Peminjaman@store');

Route::get('/peminjaman/hapus/{id}', 'Peminjaman@hapus');

Route::post('login/cek', 'login@cek');
Route::get('/logout', 'login@logout');
