<?php

use App\Http\Controllers\calificarController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\personControllers;
use App\Http\Controllers\productController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\shopController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/servicio', [App\Http\Controllers\ServicioController::class, 'index'])->name('servicio');
Route::get('/conocenos',[App\Http\Controllers\ConocenosController::class, 'index'])->name('conocenos');

Route::get('profile', [personControllers::class, 'addPerson'])->name('person.profile');
Route::get('/product', [productController::class, 'index'])->name('product.index');
Route::get('/shop', [shopController::class, 'index'])->name('shop.index');
Route::get('/detalle',[DetalleController::class, 'index'])->name('detalle.index');
Route::get('/shop/compra', [shopController::class, 'compra'])->name('shopCompra.compra');

//RUTAS PARA BUSCAR O FILTRAR DATOS
Route::post('shop/getProductByCategory', [shopController::class, 'getProductByCategory'])->name('shop.getCategory');
Route::get('shop/getProductById/{id}', [shopController::class, 'getProductById'])->name('shop.getProductById');
Route::get('shop/addCar/{id}', [shopController::class, 'addCar'])->name('shop.addCar');
Route::get('/shop/detalleProducto/{id}', [shopController::class, 'detalleProducto'])->name('shop.detalleProducto');

//RUTAS PARA AGREGAR DATOS
Route::post('product/add', [productController::class, 'add'])->name('product.add');
Route::post('person/add', [personControllers::class, 'add'])->name('person.add');
Route::post('/shop/guardarVenta', [shopController::class, 'guardarVenta'])->name('shop.guardar');

//RUTAS PARA ELIMINAR PRODUCTOS
Route::post('product/{product}', [productController::class,'delete'])->name('product.delete');

//REPORTES
Route::get('/shop/imprimir', [shopController::class, 'imprimir'])->name('shop.imprimir');
Route::get('compras/{id}',[shopController::class, 'reporteCompras'])->name('shop.ReporteCompras');
Route::get('Ventas',[ReporteController::class, 'reporteVentas'])->name('shop.ReporteVentas');
Route::get('reporteProteccionDatos/{id}', [ReporteController::class, 'reporteProteccionDatos'])->name('reportes.proteccion');
Route::get('reporteDetalle/{idfactura}', [ReporteController::class, 'reporteDetalle'])->name('reporte.detalle');
Route::get('misProductos', [ReporteController::class, 'misProductos'])->name('reporte.misProductos');
Route::get('reporteOpiniones/{idProducto}', [ReporteController::class, 'reporteOpiniones'])->name('reporte.opiniones');



Route::get('/productoCal', [productController::class, 'productoCal'])->name('product.productoCal');

//CALIFICAR

Route::post('/shop/calificar', [calificarController::class, 'calificar'])->name('shop.calificar');
