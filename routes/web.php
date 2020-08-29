<?php

use Illuminate\Support\Facades\Route;

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

/* --------------------------------------------------------------------------------------------------- */

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id?}', 'UserController@regexId');

Route::group(['prefix' => 'middleware'], function(){
	Route::get('/', 'UserController@demoMiddleware')->middleware('Test');
	Route::get('/terminate', 'UserController@demoTerminateMiddleware')->middleware('Terminate');
});

Route::resource('resource', 'ResourceController');

Route::get('request', 'DemoRequestController@request')->name('DemoRequest');

Route::group(['prefix' => 'response'], function(){
	Route::get('/', 'DemoResponseController@demo');
	Route::get('header', 'DemoResponseController@header');
	// Route::get('/cookie', 'DemoResponseController@cookie');
	Route::get('view', 'DemoResponseController@view');
	// Route::get('/json', 'DemoResponseController@json');
	Route::get('download', 'DemoResponseController@download');
	Route::get('file', 'DemoResponseController@file');
});
