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
    return view('registration');
});
Route::get('/home', function () {
    return view('beranda');
});
Route::get('/registration', 'RegistrationController@input');
Route::post('/proses', 'RegistrationController@proses');
Route::get('/login', 'RegistrationController@login');
Route::get('/logout', 'RegistrationController@logout');
Route::post('/ceklogin', 'RegistrationController@ceklogin');


