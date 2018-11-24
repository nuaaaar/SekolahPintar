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
    return view('layouts.master-dashboard');
});

Route::get('login','LoginController@index');

Route::post('signin','LoginController@signin');

Route::get('register','RegisterController@index');

Route::post('register','RegisterController@register');

Route::resource('kelas', 'KelasController');