<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('usuarios', [UserController::class, 'index'])->name('usuario.index');
Route::get('usuarios/crear',[UserController::class,'crear'])->name('usuario.crear');
Route::post('usuarios', [UserController::class, 'guardar'])->name('usuario.guardar');
Route::get('usuarios/{id}', [UserController::class, 'detalle'])->name('usuario.detalle');

Route::delete('usuarios/{id}', [UserController::class, 'eliminar'])->name('usuario.eliminar');
Route::get('usuarios/editar/{id}', [UserController::class, 'editar'])->name('usuario.editar');
Route::put('usuarios/{id}', [UserController::class, 'actualizar'])->name('usuario.actualizar');

