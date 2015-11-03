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

Route::get('/', function () {
	return view('home');
});

Route::get('/home', function() {
	return redirect('volunteer');
});

Route::get('/volunteer', 'VolunteerController@showAll');

Route::get('/volunteer/{id}', 'VolunteerController@show');

Route::post('/vol_new', 'VolunteerController@create');
Route::get('/vol_new', function () {
	return view('vol_new');
});


//Update Volunteer
Route::post('/api/volunteer/{id}/update', 'VolunteerController@update');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');