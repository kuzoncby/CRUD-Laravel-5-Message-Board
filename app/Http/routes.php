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

//List messages
Route::get('/', 'MessageController@index');

//Add a message
Route::get('/create', 'MessageController@create');
Route::post('/store', 'MessageController@store');

//Display or edit message
Route::get('/show/{message}', 'MessageController@show');
Route::post('/update/{message}', 'MessageController@update');

//Remove a message
Route::get('/destroy/{message}', 'MessageController@destroy');