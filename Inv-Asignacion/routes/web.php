<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;

use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ! RUTAS PARA VISUALIZAR LAS PAGINAS

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







Route::get('/proveedor', function () {
    return view("proveedor");
});

Route::get('/usuarios', function () {
    return view("usuarios");
});


use App\Http\Controllers\AsignacionesController;
// Rutas para asignaciones
Route::get('asignaciones', [AsignacionesController::class, 'index'])->name('asignaciones.index');
Route::get('asignaciones/create', [AsignacionesController::class, 'create'])->name('asignaciones.create');
Route::post('asignaciones', [AsignacionesController::class, 'store'])->name('asignaciones.store');
Route::get('asignaciones/{asignaciones}', [AsignacionesController::class, 'show'])->name('asignaciones.show');
Route::get('asignaciones/{asignaciones}/edit', [AsignacionesController::class, 'edit'])->name('asignaciones.edit');
Route::put('asignaciones/{asignaciones}', [AsignacionesController::class, 'update'])->name('asignaciones.update');
Route::delete('asignaciones/{asignaciones}', [AsignacionesController::class, 'destroy'])->name('asignaciones.destroy');

use App\Http\Controllers\ProductoController;
// Rutas para Productos
Route::get('producto', [ProductoController::class, 'index'])->name('producto.index');
Route::get('producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('producto', [ProductoController::class, 'store'])->name('producto.store');
Route::get('producto/{producto}', [ProductoController::class, 'show'])->name('producto.show');
Route::get('producto/{producto}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('producto/{producto}', [ProductoController::class, 'update'])->name('producto.update');
Route::delete('producto/{producto}', [ProductoController::class, 'destroy'])->name('producto.destroy');

use App\Http\Controllers\ComprasController;
// Rutas para compras
Route::get('compras', [ComprasController::class, 'index'])->name('compras.index');
Route::get('compras/create', [ComprasController::class, 'create'])->name('compras.create');
Route::post('compras', [ComprasController::class, 'store'])->name('compras.store');
Route::get('compras/{compras}', [ComprasController::class, 'show'])->name('compras.show');
Route::get('compras/{compras}/edit', [ComprasController::class, 'edit'])->name('compras.edit');
Route::put('compras/{compras}', [ComprasController::class, 'update'])->name('compras.update');
Route::delete('compras/{compras}', [ComprasController::class, 'destroy'])->name('compras.destroy');