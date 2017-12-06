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

// Home
Route::get( '/', 'IndexController@getHome');
Route::get( 'home', 'IndexController@getHome');

// Authen
Route::get( 'login', 	'AuthenController@getLogin');
Route::get( 'signup', 	'AuthenController@getSignup');
Route::get( 'logout', 	'AuthenController@logout');
Route::post('signup', 	'AuthenController@postSignup');
Route::post('login', 	'AuthenController@postLogin');

// User
Route::get( 'profile', 'UserController@getProfile')->middleware('auth');;
Route::get( 'my-page', 'UserController@getMyPage')->middleware('auth');;
Route::post('profile', 'UserController@postUpdate')->middleware('auth');;

// Programs
Route::get( 'programs/{programId}', 	'ProgramController@getProgram');  
Route::get( 'programs/paging/{paging}', 'ProgramController@getPrograms');
Route::post('programs/search', 			'ProgramController@postSearch');

// Actions
Route::get( 'programs/user/{userId}', 			'ActionsController@getPrograms');
Route::post('programs/add/{programId}/{userId}', 	'ActionsController@postProgramToUser');

// Error
Route::get( 'error', 'ErrorController@getError');