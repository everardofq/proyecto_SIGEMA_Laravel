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
//Route::get('/','EgresadoController@index');
//Route::get('registro','EgresadoController@registro');
//Route::get('consulta','EgresadoController@consulta');

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');
Route::resource('log','LogController');
Route::resource('egresado','EgresadoController');
Route::get('egresados','EgresadoController@listing');

Route::get('logout','LogController@logout');

Route::group(['middleware'=>['web']], function(){
	Route::resource('create','UsuarioController');
});


