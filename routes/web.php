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

Route::get('/', function () {
    return view('admin');
});


Route::get('adminloket', function () {
    return view('admin');
});

Route::get('adminttd', function () {
    return view('adminTTDpimpinan');
});


Route::get('adminpermohonansurat', function () {
    return view('adminPermohonanSurat');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('arsip', 'ArsipController@create')->name('arsip');

Route::post('arsip/store', 'ArsipController@store');

Route::get('/' , 'AdminLoketController@index');

Route::get('/list' , 'listArsipController@list');

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
