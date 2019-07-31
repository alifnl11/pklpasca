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

Route::get('/mahasiswa','GuzzleController@getDataMahasiswa');
Route::get('/surat','GuzzleController@getDataSurat');
Route::get('/proses','GuzzleController@getDataProses');
Route::get('/admin','GuzzleController@getDataAdmin');
