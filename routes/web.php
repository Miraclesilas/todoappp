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

Route::get('/', 'TaskController@index')->name('index');
 Route::post('/create', 'TaskController@create')->name('create');
  Route::get('/database', 'TaskController@database')->name('database');
   Route::get('/destroy/{id}', 'TaskController@destroy')->name('destroy');
   Route::get('/edit/{id}', 'TaskController@edit')->name('edit');
   Route::post('/update/{id}', 'TaskController@update')->name('update');
    

