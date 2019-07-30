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

Route::get('/', 'DashboardController@index');
Auth::routes();

Route::get('/home', 'DashboardController@index');
Route::get('/pencarian', 'ItemsController@index');
Route::get('/pencarian/{slug}', 'ItemsController@show');
Route::get('/pencarian/{slug}/verify', 'ItemsController@verify');
Route::get('/pencarian/{slug}/payment', 'ItemsController@borrow');
Route::get('/transaksi/transaksiku/{id}', 'TransactionController@show');
Route::get('/transaksi/transaksiku', 'TransactionController@index');
Route::get('/tentang-kami', function(){
	return view('tentang-kami');
});
//Route::resource('pencarian', 'ItemsController');
