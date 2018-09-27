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

Route::get('/produk', 'ProdukController@index')->name('produk');
Route::post('/produk', 'ProdukController@store');
Route::get('produk/{id}', 'ProdukController@show');
Route::get('/produk/{detail}/{id}/edit', 'ProdukController@edit');
Route::get('/produk/{detail}/{id}/konfirmasi', 'ProdukController@konfirmasi');
Route::put('/produk/{id}', 'ProdukController@update');
Route::delete('/produk/{detail}/{id}', 'ProdukController@destroy');