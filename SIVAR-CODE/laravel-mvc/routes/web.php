<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListadoController;
use App\Http\Controller\VistapController;
use App\Http\Controller\CategoriesController;
use App\Http\Controller\AgregarController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrecuentController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\OfertaController;
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

//Vista Productos por Categoria y Todos

Route::get('/todos/{category?}', [App\Http\Controllers\VistapController::class, 'productos'])->name('productos');



Route::get('/cat', [App\Http\Controllers\CategoriesController::class, 'categorias'])->name('categorias');

Route::get('/todos/detalle/{id}', [App\Http\Controllers\VistapController::class, 'detalle'])->name('detalle');

//Filtros


//Preguntas Frecuentes
Route::get('/preguntas',[App\Http\Controllers\FrecuentController::class, 'frecuente'])->name('pregunta');


//Agregar Categorias

Route::get('/add', function () {
  return view('agregar');
});

Route::post('EnvioCat', [App\Http\Controllers\AgregarController::class, 'add']);

//Rutas del carrito
Route::post('/store/cart-add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');

Route::get('/store/cart-checkout', [App\Http\Controllers\CartController::class, 'cart'])->name('cart.checkout');

Route::post('/store/cart-clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');

Route::post('/store/cart-removeitem', [App\Http\Controllers\CartController::class, 'removeitem'])->name('cart.removeitem');

Route::post('/store/cart-plus', [App\Http\Controllers\CartController::class, 'addQty'])->name('cart.addqty');

Route::post('/store/cart-minus', [App\Http\Controllers\CartController::class, 'removeQty'])->name('cart.removeqty');

//Pagos
Route::get('/paga', [PagoController::class, 'pagos'])->name('pagas');
Route::post('EnvioPago', [PagoController::class, 'agregar']);


//Oferta
Route::get('/oferta', function () {
  return view('oferta');
});
Route::post('EnvioF', [OfertaController::class, 'addf']);