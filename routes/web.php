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



Route::get('/', 'PagesController@index')->name('/');

//gauardar nueva nota
Route::post('/crear', 'PagesController@crear')->name('crear');

Route::get('/actualizar/{id}', 'PagesController@actualizar')->name('actualizar');

Route::put('/edit/{id}', 'PagesController@editar')->name('edit');

Route::delete('/eliminar/{id}', 'PagesController@delete')->name('eliminar');


