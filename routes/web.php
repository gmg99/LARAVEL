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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/ciudades', 'PeticionesController@ciudades');

Route::get('/tipos/{id}', 'PeticionesController@tipos');

Route::get('/eventosFecha/{id}/{fecha}', 'PeticionesController@eventosFecha');

Route::get('/eventos/{id}', 'PeticionesController@eventos');


Route::get('/eventos/{id}', 'PeticionesController@eventos');

Route::post('/login', 'PeticionesController@authenticate');

Route::get('/crsf', 'PeticionesController@codigo');

