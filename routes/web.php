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
Route::get('/', function(){
	return view('welcome');
});

//Rutas para el Modelo Clientes


Route::get('/clientes', 'ClientesController@index');

Route::get('/clientes/create','ClientesController@create');
Route::get('/clientes/{cliente}','ClientesController@show');
Route::get('/clientes/{cliente}/edit','ClientesController@edit');

Route::post('/clientes','ClientesController@store');



Auth::routes();

//Route::get('/clientes', 'ClienteController@index');
