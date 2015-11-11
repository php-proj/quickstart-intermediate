<?php

Route::get('/', function () {
	return view('welcome');
})->middleware('guest');

// Task Routes
Route::get('/tasks', 'TaskController@index');
Route::get('/task/{id}', 'TaskController@detail');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// test
Route::match(['get', 'post', 'put'], 'test/input', 'TestController@input');
Route::match(['get', 'post', 'put'], 'test/output', 'TestController@output');
Route::get('/test/json', function() {
	//this route should returns json response
	return ['foo', 'bar'];
});
Route::get('/test/cache/{key}', 'TestController@cache');

// app
Route::get('/app/env/name', function() {
	return app()->environment();
});
Route::get('/app/env/{str}', function($str) {
	return env($str);
});

// photo
Route::resource('photo', 'PhotoController');