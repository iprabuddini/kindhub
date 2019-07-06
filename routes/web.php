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


Auth::routes();

Route::get('/', 'ClassController@index');

Route::get('/home', 'ClassController@index');
Route::get('/class/all', 'ClassController@getAll');
Route::get('/class/{id}', 'ClassController@delete');

Route::post('/class/create', 'ClassController@store');
