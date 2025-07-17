<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackingServientregaController;

Route::get('/consultar', [TrackingServientregaController::class, 'consultarGuia']);
Route::post('/consultar', [TrackingServientregaController::class, 'consultarGuia']); //->name('consultar.guia');
//Route::get('/rastrear-soap/{guia}', [TrackingServientregaController::class, 'consultarEstadoGuia']);

