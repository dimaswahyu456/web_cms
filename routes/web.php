<?php

use App\Http\Controllers\FtkpController;
use App\Http\Controllers\HasilMetodeController;
use App\Http\Controllers\SpkController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('/welcome');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::group(['prefix' => 'kriteria'], function () {
//     // Route::get('/', 'KriteriaController@index');


// ROUTE SPK
Route::get('spk', ['as' => 'spk.list', 'uses' => 'SpkController@index']);
Route::get('spk/add', ['as' => 'spk.create', 'uses' => 'SpkController@create']);
Route::get('spk/show/{id}', ['as' => 'spk.show', 'uses' => 'SpkController@show']);
Route::post('spk/store', ['as' => 'spk.add', 'uses' => 'SpkController@store']);
Route::get('spk/edit/{id}', ['as' => 'spk.edit', 'uses' => 'SpkController@edit']);
Route::post('spk/update/{id}', ['as' => 'spk.update', 'uses' => 'SpkController@update']);
Route::get('spk/delete/{id}', ['as' => 'spk.destroy', 'uses' => 'SpkController@delete']);

// ROUTE FTKP
Route::get('ftkp', ['as' => 'ftkp.list', 'uses' => 'FtkpController@index']);
Route::get('ftkp/add', ['as' => 'ftkp.create', 'uses' => 'FtkpController@create']);
Route::get('ftkp/show/{id}', ['as' => 'ftkp.show', 'uses' => 'FtkpController@show']);
Route::post('ftkp/store', ['as' => 'ftkp.add', 'uses' => 'FtkpController@store']);
Route::get('ftkp/edit/{id}', ['as' => 'ftkp.edit', 'uses' => 'FtkpController@edit']);
Route::post('ftkp/update/{id}', ['as' => 'ftkp.update', 'uses' => 'FtkpController@update']);
Route::get('ftkp/delete/{id}', ['as' => 'ftkp.destroy', 'uses' => 'FtkpController@delete']);

// ROUTE Customer
Route::get('cust', ['as' => 'cust.list', 'uses' => 'McustController@index']);
Route::get('cust/add', ['as' => 'cust.create', 'uses' => 'McustController@create']);
Route::get('cust/show/{id}', ['as' => 'cust.show', 'uses' => 'McustController@show']);
Route::post('cust/store', ['as' => 'cust.add', 'uses' => 'McustController@store']);
Route::get('cust/edit/{id}', ['as' => 'cust.edit', 'uses' => 'McustController@edit']);
Route::post('cust/update/{id}', ['as' => 'cust.update', 'uses' => 'McustController@update']);
Route::get('cust/delete/{id}', ['as' => 'cust.destroy', 'uses' => 'McustController@delete']);

// ROUTE Kategori
Route::get('kategori', ['as' => 'kategori.list', 'uses' => 'KategoriController@index']);
Route::get('kategori/add', ['as' => 'kategori.create', 'uses' => 'KategoriController@create']);
Route::get('kategori/show/{id}', ['as' => 'kategori.show', 'uses' => 'KategoriController@show']);
Route::post('kategori/store', ['as' => 'kategori.add', 'uses' => 'KategoriController@store']);
Route::get('kategori/edit/{id}', ['as' => 'kategori.edit', 'uses' => 'KategoriController@edit']);
Route::post('kategori/update/{id}', ['as' => 'kategori.update', 'uses' => 'KategoriController@update']);
Route::get('kategori/delete/{id}', ['as' => 'kategori.destroy', 'uses' => 'KategoriController@delete']);

// ROUTE User
Route::get('user', ['as' => 'user.list', 'uses' => 'UserController@index']);
Route::get('user/add', ['as' => 'user.create', 'uses' => 'UserController@create']);
Route::get('user/show/{id}', ['as' => 'user.show', 'uses' => 'UserController@show']);
Route::post('user/store', ['as' => 'user.add', 'uses' => 'UserController@store']);
Route::get('user/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
Route::post('user/update/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);
Route::get('user/delete/{id}', ['as' => 'user.destroy', 'uses' => 'UserController@delete']);
