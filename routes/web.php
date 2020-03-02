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

Route::get('/', 'FrontController@index');

Route::get('/news', 'FrontController@news');


Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix'=>'/home'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/news', 'NewsController@index');
    Route::post('/news/store', 'NewsController@store');
});


