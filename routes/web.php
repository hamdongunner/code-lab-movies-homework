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

Route::get('/','MovieController@getAll');
Route::get('/logout','UserController@logout');
Route::get('/movie/view/{id}','MovieController@viewOne');
Route::get('/auth','UserController@viewAuth');
Route::get('/auth/rigester','UserController@viewRigester');
Route::get('/auth/login','UserController@viewlog');

Route::post('/movie/coment/{id}/request','MovieController@addComent');
Route::post('/auth/rigester/request','UserController@addUser');
Route::post('/auth/login/request','UserController@logUser');
