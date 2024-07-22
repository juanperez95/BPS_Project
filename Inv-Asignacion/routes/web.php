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

// ? RUTAS PARA VISUALIZAR LAS PAGINAS

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/usuarios', function () {
    return view("usuarios");
});


use App\Http\Controllers\AsignacionesController;
// ? Rutas para asignaciones
Route::get('asignaciones', [AsignacionesController::class, 'index'])->name('asignaciones.index');
Route::get('asignaciones/create', [AsignacionesController::class, 'create'])->name('asignaciones.create');
Route::post('asignaciones', [AsignacionesController::class, 'store'])->name('asignaciones.store');
Route::get('asignaciones/{asignaciones}', [AsignacionesController::class, 'show'])->name('asignaciones.show');
Route::get('asignaciones/{asignaciones}/edit', [AsignacionesController::class, 'edit'])->name('asignaciones.edit');
Route::put('asignaciones/{asignaciones}', [AsignacionesController::class, 'update'])->name('asignaciones.update');
Route::delete('asignaciones/{asignaciones}', [AsignacionesController::class, 'destroy'])->name('asignaciones.destroy');


use App\Http\Controllers\ComprasController;
// ? Rutas para compras
Route::get('compras', [ComprasController::class, 'index'])->name('compras.index');
Route::get('compras/create', [ComprasController::class, 'create'])->name('compras.create');
Route::post('compras', [ComprasController::class, 'store'])->name('compras.store');
Route::get('compras/{compras}', [ComprasController::class, 'show'])->name('compras.show');
Route::get('compras/{compras}/edit', [ComprasController::class, 'edit'])->name('compras.edit');
Route::put('compras/{compras}', [ComprasController::class, 'update'])->name('compras.update');
Route::delete('compras/{compras}', [ComprasController::class, 'destroy'])->name('compras.destroy');


use App\Http\Controllers\ProductosController;
// ? Rutas para productos
Route::get('productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductosController::class, 'create'])->name('productos.create');
Route::post('productos', [ProductosController::class, 'store'])->name('productos.store');
Route::get('productos/{productos}', [ProductosController::class, 'show'])->name('productos.show');
Route::get('productos/{productos}/edit', [ProductosController::class, 'edit'])->name('productos.edit');
Route::put('productos/{productos}', [ProductosController::class, 'update'])->name('productos.update');
Route::delete('productos/{productos}', [ProductosController::class, 'destroy'])->name('productos.destroy');

use App\Http\Controllers\ProveedoresController;
// ? Rutas para proveedores
Route::get('proveedores', [ProveedoresController::class, 'index'])->name('proveedores.index');
Route::get('proveedores/create', [ProveedoresController::class, 'create'])->name('proveedores.create');
Route::post('proveedores', [ProveedoresController::class, 'store'])->name('proveedores.store');
Route::get('proveedores/{proveedores}', [ProveedoresController::class, 'show'])->name('proveedores.show');
Route::get('proveedores/{proveedores}/edit', [ProveedoresController::class, 'edit'])->name('proveedores.edit');
Route::put('proveedores/{proveedores}', [ProveedoresController::class, 'update'])->name('proveedores.update');
Route::delete('proveedores/{proveedores}', [ProveedoresController::class, 'destroy'])->name('proveedores.destroy');



use App\Http\Controllers\RegisterUsersController;

// Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterUsersController::class, 'create'])->name('register.user.create');

// Ruta para almacenar un nuevo usuario
Route::post('/register', [RegisterUsersController::class, 'store'])->name('register.user.store');

// Otras rutas necesarias para el controlador
Route::get('/users', [RegisterUsersController::class, 'index'])->name('user.index');
Route::get('/users/edit/{document}', [RegisterUsersController::class, 'edit'])->name('user.edit');
Route::post('/users/update/{document}', [RegisterUsersController::class, 'update'])->name('user.update');
Route::delete('/users/destroy/{document}', [RegisterUsersController::class, 'destroy'])->name('user.destroy');


use App\Http\Controllers\LoginController;

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Ruta para procesar el inicio de sesión
Route::post('/login', [LoginController::class, 'store'])->name('login.store');