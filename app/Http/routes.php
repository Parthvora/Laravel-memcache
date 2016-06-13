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

\Event::listen('Illuminate\Database\Events\QueryExecuted', function($query) { 
  echo 'Query executed: ' . $query->sql;
});

Route::get('/', function () {
  return view('welcome');
});

Route::get('/users', 'UserController@index');
