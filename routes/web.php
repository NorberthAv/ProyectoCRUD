<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PrecioController;
use App\Http\Controllers\inventarioController;


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
    return view('home');
})->name('home.index')->middleware('auth');

/*
-------------------------------Rutas para Login y Register---------------------

 */

Route::post('/login',[SessionsController::class, 'store'])->name('login.store');

Route::post('/register',[RegisterController::class, 'store'])->name('register.store');

Route::get('/logout',[SessionsController::class, 'destroy'])->name('login.destroy')
->middleware('auth');

Route::get('/login',[SessionsController::class, 'create'])->name('login.index')
->middleware('guest');

Route::get('/register',[RegisterController::class, 'create'])->name('register.index')
->middleware('guest');

/*
-------------Rutas de vistas---------------------------------------------------

 */
Route::get('/category',[CategoryController::class, 'index'])->name('category.index')->middleware('auth');

Route::post('/category',[CategoryController::class, 'store'])->name('categorie.store');

Route::get('/product',[ProductController::class, 'index'])->name('product.index')->middleware('auth');

Route::post('product',[ProductController::class, 'store'])->name('product.store');

Route::get('precio',[PrecioController::class, 'index'])->name('precio.index')->middleware('auth');

Route::post('precio',[PrecioController::class, 'store'])->name('precio.store');

Route::get('/inventario',[InventarioController::class, 'index'])->name('inventario.index')->middleware('auth');

/*
----------------------------Rutas Edit--------------------------------------
*/
Route::post('/category-edit/{id}',[CategoryController::class, 'edit'])->name('categorie.edit');

Route::put('/category-update/{id}',[CategoryController::class, 'update'])->name('categorie.update');

Route::put('/category-desactiva/{id}',[CategoryController::class, 'desactiva'])->name('categorie.desactiva');

Route::put('/category-activa/{id}',[CategoryController::class, 'activa'])->name('categorie.activa');



Route::post('/product-edit/{id}',[ProductController::class, 'edit'])->name('product.edit');

Route::put('/product-update/{id}',[ProductController::class, 'update'])->name('product.update');

Route::put('/product-desactiva/{id}',[ProductController::class, 'desactiva'])->name('product.desactiva');

Route::put('/product-activa/{id}',[ProductController::class, 'activa'])->name('product.activa');



Route::post('/precio-edit/{id}',[PrecioController::class, 'edit'])->name('precio.edit');

Route::put('/precio-update/{id}',[PrecioController::class, 'update'])->name('precio.update');

Route::put('/precio-desactiva/{id}',[PrecioController::class, 'desactiva'])->name('precio.desactiva');

Route::put('/precio-activa/{id}',[PrecioController::class, 'activa'])->name('precio.activa');

/*
--------------------------------Rutas Inventario-------------------------------------------------------------------
 */
Route::put('/inventario-desactiva/{id}',[InventarioController::class, 'desactiva'])->name('inventario.desactiva');

Route::put('/inventario-activa/{id}',[InventarioController::class, 'activa'])->name('inventario.activa');