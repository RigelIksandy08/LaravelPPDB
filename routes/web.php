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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/calonsiswa', 'CalonsiswaController@index');
Route::get('/calonsiswa/create', 'CalonsiswaController@create')->name('calonsiswa.create');
Route::post('/calonsiswa', 'CalonsiswaController@store')->name('calonsiswa.store');

// route::get('/siswabaru', 'SiswabaruController@index');

Route::get('/calonsiswa/{calonsiswa}', 'CalonsiswaController@show');
