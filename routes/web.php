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

<<<<<<< HEAD
Route::get('/', function () {
    return view('admin');
});


Route::get('adminloket', function () {
    return view('admin');
});
=======
>>>>>>> 83256e599bbd31fd6bf13b53f72eef19c7ee3a3d

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

<<<<<<< HEAD
Route::get('/' , 'AdminLoketController@index');
=======

Route::get('/adminloket' , 'AdminLoketController@index');
Route::get('/adminPermohonanSurat' , 'AdminPermohonanSurat@index');
Route::get('/adminTTDpimpinan' , 'AdminTTDPimpinan@index');

Route::get('/login', 'LoginController@username');
Route::get('/login', 'LoginController@__construct');

Route::get('/list' , 'listArsipController@list');
Route::get('/search','listArsipController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 83256e599bbd31fd6bf13b53f72eef19c7ee3a3d
