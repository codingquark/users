<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'UsersController@create');
//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

Route::get('userpanel/dashboard', 'UsersController@adminpanel');
Route::when('userpanel/*', 'auth');
Route::get('adminpanel/dashboard', function()
	{ 
		$users = User::all();
		return View::make('adminpanel.dashboard', ['users' => $users]); 
	});

Route::when('adminpanel/*', 'admin');
Route::get('dashboard', function() 
	{ 
		$users = User::all();
		return View::make('adminpanel.dashboard', ['users' => $users]); 
	});
Route::when('dashboard', 'admin');