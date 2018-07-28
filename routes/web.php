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
use App\EstacionesAlertas ;

Route::get('login','Auth\LoginController@showLoginForm');
Route::post('login','Auth\LoginController@login');

Route::resource('mensajes','MessagesControler');
Route::get('/', [ 'as' =>'home' ,'uses' => 'PagesController@home'])->middleware('example');
Route::get('saludos/{nombre?}',['as' =>'saludos', 'uses' =>'PagesController@saludo'])->where('nombre',"[A-Za-z]+");
//Rutas de cicohalert
Route::resource('productorango','ProductoFaseElementoRangoControler');


Route::get('estacionesalertas','EstacionesAlertasControler@index');
Route::get('alert',function(){
  return DataTables::eloquent(EstacionesAlertas::query())->make(true);

});

Route::resource('prueba','MasterControler');
Route::resource('productofaseelementorango','ProductoFaseElementoRangoControler');
