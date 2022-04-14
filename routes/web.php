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

Route::get('/', 'webController@home')->name('home');
Route::get('/curso', 'webController@course')->name('course');
Route::get('/blog', 'webController@blog')->name('blog');
Route::get('/blog/{uri}', 'webController@article')->name('article');
Route::get('/contato', 'webController@contact')->name('contact');
