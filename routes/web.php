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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('persona/index',"PersonaController@index");
Route::get('persona/show/{id}',"PersonaController@show");

Route::get('departamentos', 'DepartamentoController@index');
Route::get('paises', 'PaisController@index');
