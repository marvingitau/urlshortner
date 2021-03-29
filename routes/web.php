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

Route::get('/','ShortnerController@index');
Route::post('/generate_url','ShortnerController@store')->name('post_url');
Route::get('{code}', 'ShortnerController@shortenLink')->name('shorten.link');
