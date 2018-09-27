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

Route::get('/admin/produk', 'ProdukController@index')->name('produk');
Route::post('/admin/produk', 'ProdukController@store');
Route::get('/admin/produk/{id}', 'ProdukController@show');
Route::get('/admin/produk/{detail}/{id}/edit', 'ProdukController@edit');
Route::get('/admin/produk/{detail}/{id}/konfirmasi', 'ProdukController@konfirmasi');
Route::put('/admin/produk/{id}', 'ProdukController@update');
Route::delete('/admin/produk/{detail}/{id}', 'ProdukController@destroy');