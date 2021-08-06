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

Route::get('/', 'Api\v1\MainController@index');

Route::get('/bai-viet/{id}', 'Api\v1\BaivietController@show');

//auth
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
