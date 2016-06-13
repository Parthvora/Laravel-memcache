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
$query = NULL;
\Event::listen('Illuminate\Database\Events\QueryExecuted', function($query) {
  $query = 'Query executed: ' . $query->sql;
});

Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', [ 'as' => 'signin', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('signup', ['as' => 'signup', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('signup', [ 'as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

Route::get('/', function () {
  return view('welcome');
});

Route::get('users', [ 'as' => 'users', 'uses' => 'UserController@index']);
