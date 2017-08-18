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
    echo phpinfo();
});


Route::get('haha', function(){
	echo 'asd';
});
Route::get('faye', 'FayeTestController@sendFayeMessage');
Route::get('server', function(){
	return view('server');
});
Route::get('client', function(){
	return view('client');
});