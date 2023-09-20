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

Route::get('/', 'HomeController@index');

// Route::group(['prefix' => 'kriteria'], function () {
//     // Route::get('/', 'KriteriaController@index');


// ROUTE SPK
Route::get('spk', [SpkController::class, 'index'])->name('spk.list');
// Route::get('spk/show/{id}', [SpkController::class, 'show'])->name('spk.show');
// Route::get('spk/add', [SpkController::class, 'create'])->name('spk.create');
// Route::post('spk/store', [SpkController::class, 'store'])->name('spk.add');
// Route::get('spk/edit/{id}', [SpkController::class, 'edit'])->name('spk.edit');
// Route::post('spk/update/{id}', [SpkController::class, 'update'])->name('spk.update');
// Route::get('spk/delete/{id}', [SpkController::class, 'destroy'])->name('spk.destroy');

// ROUTE FTKP
Route::get('ftkp', [FtkpController::class, 'index'])->name('ftkp.list');
Route::get('ftkp/show/{id}', [FtkpController::class, 'show'])->name('ftkp.show');
Route::get('ftkp/add', [FtkpController::class, 'create'])->name('ftkp.create');
Route::post('ftkp/store', [FtkpController::class, 'store'])->name('ftkp.add');
Route::get('ftkp/edit/{id}', [FtkpController::class, 'edit'])->name('ftkp.edit');
Route::post('ftkp/update/{id}', [FtkpController::class, 'update'])->name('ftkp.update');
Route::get('ftkp/delete/{id}', [FtkpController::class, 'destroy'])->name('ftkp.destroy');
// Route::group(['prefix' => 'alternatif'], function () {
// 	Route::get('/', 'AlternatifController@index');
// 	Route::get('/penilaian/{alternatif}', 'AlternatifController@value');
// 	Route::post('/nilai_simpan', 'AlternatifController@store');
// 	Route::get('/detail/{id}', 'AlternatifController@show');
// 	Route::post('/tambah', 'AlternatifController@insert');
// 	Route::get('/edit/{id}', 'AlternatifController@edit');
// 	Route::post('/update', 'AlternatifController@update');
// 	Route::get('/hapus/{id}', 'AlternatifController@delete');
// });

// Route::group(['prefix' => 'user'], function () {
// 	Route::get('/', 'UserController@index');
// 	Route::post('/tambah', 'UserController@insert');
// 	Route::get('/edit/{id}', 'UserController@edit');
// 	Route::get('/detail/{id}', 'UserController@show');
// 	Route::post('/update', 'UserController@update');
// 	Route::get('/hapus/{id}', 'UserController@delete');
// });

// Route::get('hasil', 'HasilController@index');
// Route::get('hasilwp', 'HasilWPController@index');
// Route::get('hasildua', 'HasilMetodeController@index');
