<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('mahasiswa','MahasiswaController@index');
Route::post('mahasiswa','MahasiswaController@create');
Route::get('/mahasiswa/{id}','MahasiswaController@show');
Route::put('/mahasiswa/{id}','MahasiswaController@update');
Route::delete('/mahasiswa/{id}','MahasiswaController@delete');

Route::get('/v1/mahasiswa','GuzzleController@getDataMahasiswa');
Route::get('/v1/surat','GuzzleController@getDataSurat');
Route::get('/v1/proses','GuzzleController@getDataProses');
Route::get('/v1/admin','GuzzleController@getDataAdmin');
