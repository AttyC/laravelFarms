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

Route::get('/', 'MarketController@index');
Route::resource('markets', 'MarketController');
Route::get('/farms', 'FarmController@index');
Route::resource('farms', 'FarmController');
