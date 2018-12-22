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

Route::get('save_subscription/{user_id}/{pkg_id}', 'HomeController@save_subscription_func');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('new_package', 'HomeController@new_package_func');

Route::post('save_package_info','HomeController@save_package_info_func');

Route::get('new_apartment', 'HomeController@new_apartment_func');

Route::post('save_apartment_info','HomeController@save_apartment_info_func');