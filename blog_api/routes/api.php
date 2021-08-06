<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function(){
	Route::resource('category', 'Api\v1\CategoryPostController');
	Route::resource('post', 'Api\v1\PostController');
	Route::resource('danh-muc', 'Api\v1\DanhmucController');
	Route::resource('bai-viet', 'Api\v1\BaivietController');
	Route::resource('lien-he', 'Api\v1\LienheController')->only(['index', 'store']);
	Route::resource('gioi-thieu', 'Api\v1\AboutController')->only(['index']);
	Route::resource('tim-kiem', 'Api\v1\SearchController')->only(['index']);
});