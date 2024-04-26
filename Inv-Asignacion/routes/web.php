<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsignacionDiaDeMaController;
use App\Http\Controllers\AsignacionComponenteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view("auth.login");
});

Route::get('/register', function () {
    return view("auth.register");
});

Route::get('/asignacion_diadema', function () {
    return view("asignacion_diadema");
});

Route::get('/asignacion_componente', function () {
    return view("asignacion_componente");
});

Route::get('/categoria', function () {
    return view("categoria");
});

Route::get('/compra', function () {
    return view("compra");
});

Route::get('/producto', function () {
    return view("producto");
});

Route::get('/proveedor', function () {
    return view("proveedor");
});

Route::get('/usuarios', function () {
    return view("usuarios");
});