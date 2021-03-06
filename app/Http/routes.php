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

Route::get('/', 'PageController@index');

Route::get('about', 'PageController@about');

Route::get('windermere', 'PageController@windermere');

Route::get('dr-phillips', 'PageController@windermere');

Route::get('winter-garden', 'PageController@windermere');

Route::post('/', 'PageController@quote');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
