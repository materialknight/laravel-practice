<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

Route::get('/', [ProyectoController::class, 'index'])->name('home');
Route::get('/nuevoproyecto', [ProyectoController::class, 'create1'])->name('agregar');
Route::get('/borrar/{id}', [ProyectoController::class, 'delete1'])->name('borrar');
Route::get('/editar/{id}', [ProyectoController::class, 'edit'])->name('editar');
Route::get('/pdf', [ProyectoController::class, 'report'])->name('report');
Route::post('/agregado', [ProyectoController::class, 'addEntry'])->name('agregando');
Route::delete('/borrando/{id}', [ProyectoController::class, 'deleting'])->name('borrando');
Route::put('/editado/{id}', [ProyectoController::class, 'confirmEdit'])->name('confirmEdit');
