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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'MainController@index');

Route::get('/task{id}', 'TaskController@index')->where('id', '[0-9]+');

Route::get('/queue', 'QueueController@index');

Route::get('/queue/update', 'QueueController@update');

Route::get('/queue/done', 'QueueController@done');
