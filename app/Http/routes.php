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
    return view('index');
});


Route::get('layout',function(){
   return view('layout');
});


Route::get('videoList',function(){
	return view('videoList');
});

Route::get('videoPlay',function(){
	return view('videoPlay');
});