<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('home');
Route::get('/movies/show/{id}', 'HomeController@show')->name('show');

Route::get('/movies/create', 'HomeController@create')->name('create');
Route::post('/movies/store', 'HomeController@store')->name('store');

Route::get('/movies/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('/movies/update/{id}', 'HomeController@update')->name('update');

Route::get('/movies/delete/{id}', 'HomeController@delete')->name('delete');
