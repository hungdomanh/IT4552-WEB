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
Route::get('/', 'HomeController@getHome');

// Authen
Route::get('login', 'AuthenController@getLogin');
Route::get('signup', 'AuthenController@getSignup');
Route::get('logout', 'AuthenController@logout');
Route::post('signup', 'AuthenController@postSignup');
Route::post('login', 'AuthenController@postLogin');

// User
Route::get('{username}/profile', 'UsersController@getProfile');
Route::get('{username}/my-page', 'UsersController@getMyPage');
Route::post('{username}/profile', 'UsersController@postUpdate');

// Programs
Route::get('programs', 'ProgramsController@getPrograms');
Route::get('programs/{programId}', 'ProgramsController@getProgram');
Route::post('search', 'ProgramsController@postSearch');

// Actions
Route::get('programs/{username}', 'ActionsController@getPrograms');
Route::post('programs/{programId}/{username}', 'ActionsController@postProgramToUser');

// Error
Route::get('error', 'ErrorController@getError');