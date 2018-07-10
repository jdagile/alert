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
Route::resource('mensajes','MessagesControler');

Route::get('/', [ 'as' =>'home' ,'uses' => 'PagesController@home'])->middleware('example');

Route::get('saludos/{nombre?}',['as' =>'saludos', 'uses' =>'PagesController@saludo'])->where('nombre',"[A-Za-z]+");

Route::get('login','Auth\LoginController@showLoginForm');


//Rutas de cicohalert
Route::resource('productorango','ProductoFaseElementoRangoControler');
