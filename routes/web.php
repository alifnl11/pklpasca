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
<<<<<<< HEAD

Route::get('adminpermohonansurat', function () {
    return view('adminPermohonanSurat');
});

Route::get('/form', function () {
    return view('form');
});
=======
>>>>>>> c1aba498634a802e8d62a4a93643e2c69feccc03

Route::get('arsip', 'ArsipController@create')->name('arsip');

Route::post('arsip/store', 'ArsipController@store');