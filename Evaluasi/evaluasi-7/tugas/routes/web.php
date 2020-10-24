<?php

Route::get('/register', 'AuthController@getRegister')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->name('register')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->name('login')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->middleware('auth');



Route::resource('/home', 'TodoController')->middleware('auth');

Route::get('/home', 'TodoController@index')->middleware('auth');
Route::get('/home/create', 'TodoController@create')->middleware('auth');
Route::get('/home/{slug}', 'TodoController@show')->middleware('auth');
Route::post('/home', 'TodoController@store')->middleware('auth');
Route::get('/home/{id}/edit', 'TodoController@edit')->middleware('auth');
Route::put('/home/{id}', 'TodoController@update')->middleware('auth');
Route::delete('/home/{id}', 'TodoController@destroy')->middleware('auth');
