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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas para el administrador//
Route::get('/administradores', [App\Http\Controllers\AdministradorController::class, 'index'])->name('administradores.index');
Route::get('/administradores/create', [App\Http\Controllers\AdministradorController::class, 'create'])->name('administradores.create');
Route::post('/administradores', [App\Http\Controllers\AdministradorController::class, 'store'])->name('administradores.store');
Route::get('/administradores/{administrador}', [App\Http\Controllers\AdministradorController::class, 'show'])->name('administradores.show');
Route::get('/administradores/{administrador}/edit', [App\Http\Controllers\AdministradorController::class, 'edit'])->name('administradores.edit');
Route::put('/administradores/{administrador}', [App\Http\Controllers\AdministradorController::class, 'update'])->name('administradores.update');
Route::delete('/administradores/{administrador}', [App\Http\Controllers\AdministradorController::class, 'destroy'])->name('administradores.delete');

//Rutas para el instructor//
Route::get('/instructores', [App\Http\Controllers\InstructorController::class, 'index'])->name('instructores.index');
Route::get('/instructores/create', [App\Http\Controllers\InstructorController::class, 'create'])->name('instructores.create');
Route::post('/instructores', [App\Http\Controllers\InstructorController::class, 'store'])->name('instructores.store');
Route::get('/instructores/{instructor}', [App\Http\Controllers\InstructorController::class, 'show'])->name('instructores.show');
Route::get('/instructores/{instructor}/edit', [App\Http\Controllers\InstructorController::class, 'edit'])->name('instructores.edit');
Route::put('/instructores/{instructor}', [App\Http\Controllers\InstructorController::class, 'update'])->name('instructores.update');
Route::delete('/instructores/{instructor}', [App\Http\Controllers\InstructorController::class, 'destroy'])->name('instructores.delete');

//Rutas para el cliente//
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit', [App\Http\Controllers\ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('clientes.delete');

//Rutas para el control de acceso//
Route::post('/accesos', [App\Http\Controllers\AccesoController::class, 'login'])->name('acceso.login');

