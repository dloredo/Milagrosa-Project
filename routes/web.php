<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/clientes' , 'ClientesController@index')->name("view_clientes");
Route::post('/clientes-store' , 'ClientesController@store')->name("clientes_store");

Route::get('/empleados' , 'EmpleadosController@index')->name("view_empleados");
Route::post('/empleados-store' , 'EmpleadosController@store')->name("empleados_store");