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
Route::get('/movie/add','MovieController@add');
Route::post('/movie/add/request','MovieController@adding');
Route::get('/movie/view/{id}','MovieController@viewOne');
Route::get('/movie/delete/{id?}','MovieController@deleteOne');
