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


Route::get('login', function () {
    return view('login');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/coba', function () {
    return view('coba');
});


Route::get('arsip', 'ArsipController@create')->name('arsip');

Route::post('arsip/store', 'ArsipController@store');

Route::get('/login', 'LoginController@username');
Route::get('/login', 'LoginController@__construct');

Route::get('/list' , 'listArsipController@list')->name('list');
Route::get('/search','listArsipController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/' , 'cobaController@status')->name('coba');

Route::get('list/{id}/edit', 'ArsipController@edit')->name('arsip.edit');
Route::post('list/{id}/update', 'ArsipController@update')->name('arsip.update');
Route::get('/coba/{id_proses}/status/{status}', 'cobaController@changeStatus')->name('coba.status');
Route::get('adminttd','adminttdController@status')->name('ttd');
Route::get('/ttd/{id_proses}/status/{status}', 'adminttdController@changeStatus')->name('ttd.status');
Route::get('adminttd','adminttdController@status')->name('ttd');
Route::get('/penolakan/{id_proses}/status/{status}', 'penolakanController@changeStatus')->name('penolakan.status');
Route::get('adminttd','penolakanController@status')->name('ttd');

Route::get('adminpermohonansurat','penomoranController@status')->name('penomoran');
Route::get('/penomoran/{id_proses}/status/{status}', 'penomoranController@changeStatus')->name('penomoran.status');
Route::get('/selesai/{id_proses}/status/{status}', 'selesaiController@changeStatus')->name('selesai.status');
Route::get('histori','historiController@status')->name('histori');
Route::get('/searchloket','cobaController@search');

Route::get('/user', function () {
    return view('welcome');
});

Route::get('/resi','ResiController@index');