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
Route::get('/empleados-delete' , 'EmpleadosController@delete')->name('empleados_delete');
Route::get('/empleados-estatus/{id}' , 'EmpleadosController@estatus')->name('empleados_estatus');

Route::get('/categorias' , 'CategoriasController@index')->name("view_categorias");
Route::post('/categorias-store' , 'CategoriasController@store')->name("categorias_store");

Route::get('/servicios' , 'ServiciosController@index')->name("view_servicios");
Route::post('/servicios-store' , 'ProductosServiciosController@store')->name("servicios_store");

Route::get('/productos' , 'ProductosController@index')->name("view_productos");
Route::post('/productos-store' , 'ProductosServiciosController@store')->name("productos_store");

Route::get('/ventas' , 'VentasController@index')->name("view_ventas");

Route::get('/ventas-agregar-producto-servicio/{id}' , 'VentasController@agregarProductoServicio')->name("agregarProductoServicio");
Route::post('/updateCantidad/{id}' , 'VentasController@updateCantidad')->name("updateCantidad");
Route::get('/deleteProductoServicio/{id}' , 'VentasController@deleteProductoServicio')->name("deleteProductoServicio");

Route::get('/pre-ventas' , 'VentasController@pre_venta')->name("view_pre_venta");