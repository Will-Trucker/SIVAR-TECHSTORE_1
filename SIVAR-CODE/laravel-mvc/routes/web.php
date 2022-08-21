<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListadoController;
use App\Http\Controller\VistapController;
use App\Http\Controller\CategoriesController;
use App\Http\Controller\AgregarController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DetalleController;
//Para Modelos


const UPDATED_AT = false;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
  return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/about', [AboutController::class, 'nosotros'])->name('acerca');

Route::post('EnvioProducto', [ProductController::class, 'Insertar']);

Route::get('Listado', [ListadoController::class, 'index']); 

Route::get('/editarp/{id}',[ListadoController::class,'editarp']);

Route::post('/update/{id}',[ProductController::class,'update']);

Route::get('/delete/{id}',[ListadoController::class, 'delete']);

Auth::routes();

Route::get('/todos/{category?}', [App\Http\Controllers\VistapController::class, 'productos'])->name('productos');

Route::get('/cat', [App\Http\Controllers\CategoriesController::class, 'categorias'])->name('categorias');

Route::get('/todos/{category?}/{product?}', [App\Http\Controllers\VistapController::class, 'detalle'])->name('detalle');

Route::get('/add', function () {
  return view('agregar');
});

Route::post('EnvioCat', [App\Http\Controllers\AgregarController::class, 'add']);
