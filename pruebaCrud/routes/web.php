<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::get('/',[PersonasController::class, 'index'])->name('personas.index'); 
Route::get('/create',[PersonasController::class, 'create'])->name('personas.create');
Route::post('/store',[PersonasController::class, 'store'])->name('personas.store'); //Guardar datos
Route::get('/edit/{persona}',[PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{persona}',[PersonasController::class, 'update'])->name('personas.update'); //Actualizar datos
Route::get('/show/{persona}',[PersonasController::class, 'show'])->name('personas.show'); //Mostrar un registro
Route::delete('/destroy/{persona}',[PersonasController::class, 'destroy'])->name('personas.destroy'); //Eliminar un registro
//Route::get('/store',[PersonasController::class, 'store'])->name('personas.store'); //Guardar datos