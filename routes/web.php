<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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



Route::get('/', 'PagesController@index');

Route::get('/foto', 'PagesController@foto')->name('foto');

Route::get('/blog', 'PagesController@blog')->name('blog');

Route::get('/nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');
