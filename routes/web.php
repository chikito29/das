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

Route::get('/', 'PageController@showWelcome');
Route::get('home', 'PageController@showHome');

Route::get('login', 'NAController@login');
Route::get('callback', 'NAController@callback');

Route::get('test', function(){
  return 'sample';
});
