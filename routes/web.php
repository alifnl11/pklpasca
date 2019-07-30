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


Route::get('/adminloket' , 'AdminLoketController@index');
Route::get('/adminPermohonanSurat' , 'AdminPermohonanSurat@index');
Route::get('/adminTTDpimpinan' , 'AdminTTDPimpinan@index');

Route::get('/login', 'LoginController@username');
Route::get('/login', 'LoginController@__construct');

Route::get('/list' , 'listArsipController@list')->name('list');
Route::get('/search','listArsipController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/' , 'cobaController@status')->name('coba');

Route::get('list/{id}/edit', 'ArsipController@edit')->name('arsip.edit');
Route::post('list/{id}/update', 'ArsipController@update')->name('arsip.update');
Route::get('/coba/{id_prosess}/status/{statuss}', 'cobaController@changeStatus')->name('coba.status');
Route::get('adminttd','adminttdController@status')->name('ttd');
Route::get('/ttd/{id_prosess}/status/{statuss}', 'adminttdController@changeStatus')->name('ttd.status');

Route::get('adminpermohonansurat','penomoranController@status')->name('penomoran');
Route::get('/penomoran/{id_prosess}/status/{statuss}', 'penomoranController@changeStatus')->name('penomoran.status');
