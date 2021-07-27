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

Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');
Route::prefix('kecamatan')->group(function() {
    Route::get('/index','Dashboard\KecamatanController@index')->name('kecamatan.index');
    Route::post('/insert', 'Dashboard\KecamatanController@insert')->name('kecamatan.insert');
    });

// Isi di sini


// 
Route::get('/contoh', function () {
    return view('copy_this.table');
})->name('table.index');
