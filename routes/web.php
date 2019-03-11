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

Route::get('/', function () {
    return view('/admin/index');
});
Route::get('/admin/welcome','admin\UserController@welcome');
Route::get('/admin/info','admin\UserController@index');
Route::get('/admin/create','admin\UserController@create');
// Route::get('/admin/welcome','UserController@welcome');