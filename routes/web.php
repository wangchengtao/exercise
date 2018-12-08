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

Route::get('/', 'PageController@root')->name('root');
Route::post('verification', 'PageController@verification')->name('verfication');
Route::get('index', 'PageController@index')->name('index');
Route::get('phone', 'PageController@phone')->name('phone');