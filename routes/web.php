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

/* ------------------------------------------------------------------------------------------ */

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

Route::group(['prefix' => 'redirect'], function(){
	Route::get('/uri', 'DemoRedirectController@uri');
	Route::get('/route', 'DemoRedirectController@route');
	Route::get('/action', 'DemoRedirectController@action');
	Route::get('/domain', 'DemoRedirectController@domain');
});

Route::get('blade', 'DemoBladeTeamplateController@basic');

Route::group(['prefix' => 'url'], function(){
	Route::get('/', 'UrlController@demo');
});

Route::group(['prefix' => 'eloquent'], function(){
	Route::get('/', 'DemoEloquentController@getAll');
	Route::get('where', 'DemoEloquentController@get');
	Route::get('chunk', 'DemoEloquentController@chunk');
	Route::get('search', 'DemoEloquentController@search');
	Route::get('insert', 'DemoEloquentController@insert');
	Route::get('update', 'DemoEloquentController@update');
	Route::get('delete', 'DemoEloquentController@delete');
	Route::get('restore', 'DemoEloquentController@restore');
	Route::get('force', 'DemoEloquentController@forceDelete');
});

Route::group(['prefix' => 'relationship'], function(){
	Route::get('oneone', 'RelationshipController@oneone');
	Route::get('onemany', 'RelationshipController@onemany');
	Route::get('manymany', 'RelationshipController@manymany');
});

Route::get('accessors', 'AccessorsController@accessors');
Route::get('murators', 'MuratorsController@murators');

Route::group(['prefix' => 'eagerloading'], function(){
	Route::get('/', 'EagerLoadingController@eagerLoading');
});