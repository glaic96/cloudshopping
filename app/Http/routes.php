<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'homeController@index');

Route::post('getKota', 'homeController@getKota');

Route::post('store', 'homeController@findStore');
Route::get('store/{kota}', 'homeController@getStore');


Route::get('{slug}', 'front\storeController@index');


//Route::get('image', function() {
//
//    $img = Image::make('public/front/images/store/work1.png')->resize(360, 320);
//
//    return $img->response('jpg');
//});
//Route::auth();

