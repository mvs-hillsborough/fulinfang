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


Route::post('login', "LoginController@login");
Route::get('logout', "LoginController@logout");

//视频列表页
Route::get('videoList','VideoListController@index');

//视频列表初级
Route::get('beginner','VideoListController@beginner');

//视频列表中级
Route::get('intermidiate','VideoListController@intermidiate');

//视频列表高级
Route::get('advance','VideoListController@advance');

//视频播放
Route::get('/{courseId}','VideoPlayController@index');

