<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controsller to call when that URI is requested.
|
*/

Route::get('/', 'homeController@index');

Route::post('getKota', 'homeController@getKota');

Route::post('store', 'homeController@findStore');
Route::get('kota/{kota}', 'homeController@getStore');


Route::get('store/{slug}', 'front\storeController@index');

Route::get('dashboard/view', 'back\owner\dashboardController@index');


 	Route::get('/owner/login','Auth\owner\AuthController@showLoginForm');
    Route::post('/owner/login','Auth\owner\AuthController@login');
    Route::get('/owner/logout','Auth\owner\AuthController@logout');

    // Registration Routes...
    Route::get('owner/register', 'Auth\owner\AuthController@showRegistrationForm');
    Route::post('owner/register', 'Auth\owner\AuthController@register');




    

//Route::get('image', function() {
//
//    $img = Image::make('public/front/images/store/work1.png')->resize(360, 320);
//
//    return $img->response('jpg');
//});
//Route::auth();

