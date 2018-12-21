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
    return view('new_home');
});


Route::post('save_hotel_info','HomeController@save_hotel_info_func');

Route::get('new_hotel', 'HomeController@new_hotel_func');

Route::get('/home', 'HomeController@index')->name('home');
