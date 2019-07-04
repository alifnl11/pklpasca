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

<<<<<<< HEAD
=======
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

Route::get('arsip', 'ArsipController@create')->name('arsip');

Route::post('arsip/store', 'ArsipController@store');
>>>>>>> 3a6f778a70e25f271de3e80cec9c07af1c6694a7
