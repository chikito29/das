<?php

Route::resource('documents', 'DocumentController');
Route::resource('notifications', 'NotificationController');

Route::get('callback', 'NAController@callback');
Route::get('search', 'SearchController@search');
Route::get('search/results', 'SearchController@results');
Route::get('/', 'PageController@showWelcome');
Route::get('home', 'PageController@showHome');
Route::get('login', 'NAController@login');
