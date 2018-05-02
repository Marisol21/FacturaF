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
    return view('admin');
});

//Auth::routes();
//Route::get('/', 'PrincipalController@index');
Route::resource('cliente','ClienteController');
Route::resource('emisor','EmisorController');
Route::resource('producto','ProductoController');
Route::resource('clave','CvePSController');
Route::resource('unidad','UnidadMedController');
Route::resource('factura','FacturafController');