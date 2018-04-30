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

Route::get('/', 'NewController@index');
Route::get('/departments', 'NewController@departments');
Route::get('/depEmps/{id}', 'NewController@deptEmp');
Route::get('/index', 'AlternativeController@index');
Route::get('/statistics', 'NewController@statistics');
