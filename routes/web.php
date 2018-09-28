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

//web statis
Route::get('/', function () {
    return view('website/home');
});
Route::get('/about', function () {
    return view('website/about');
});
Route::get('/contact', function () {
    return view('website/contact');
});

//web produk
Route::get('/product', 'WebsiteController@showProducts');

//web blog


//admin product
Route::get('/admin/produk', 'ProdukController@index')->name('produk');
Route::post('/admin/produk', 'ProdukController@store');
Route::get('/admin/produk/{id}', 'ProdukController@show');
Route::get('/admin/produk/{detail}/{id}/edit', 'ProdukController@edit');
Route::get('/admin/produk/{detail}/{id}/konfirmasi', 'ProdukController@konfirmasi');
Route::put('/admin/produk/{id}', 'ProdukController@update');
Route::delete('/admin/produk/{detail}/{id}', 'ProdukController@destroy');

//admin blog post
Route::get('/admin/blog', 'BlogController@index')->name('blog');
Route::post('/admin/blog', 'BlogController@store');
Route::get('/admin/blog/{id}/edit', 'BlogController@edit');
Route::get('/admin/blog/{id}/konfirmasi', 'BlogController@konfirmasi');
Route::put('/admin/blog/{id}', 'BlogController@update');
Route::delete('/admin/blog/{id}', 'BlogController@destroy');