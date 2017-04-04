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
Route::get('/', 'WelcomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@admin');

Route::resource('usuario', 'UsuarioController');
Route::get('/usuario/delete/{id}','UsuarioController@delete');

Route::resource('cataloge','CatalogeController');
Route::get('/solicitud/crear_solicitud/{id}','SolicitudController@crear_solicitud');


Route::resource('solicitud','SolicitudController');



Auth::routes();






