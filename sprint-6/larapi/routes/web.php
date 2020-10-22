<?php

Route::get('/register', 'AuthController@getRegister');
Route::post('/register', 'AuthController@postRegister')->name('register');
Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin')->name('login');



Route::resource('/home', 'TodoController');

Route::get('/home', 'TodoController@index');
Route::get('/home/create', 'TodoController@create');
Route::get('/home/{slug}', 'TodoController@show');
Route::post('/home', 'TodoController@store');
Route::get('/home/{id}/edit', 'TodoController@edit');
Route::put('/home/{id}', 'TodoController@update');
Route::delete('/home/{id}', 'TodoController@destroy');
