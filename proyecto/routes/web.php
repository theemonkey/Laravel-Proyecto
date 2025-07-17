<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

/*Route::get('/suma', function () {
    return view('suma');
});*/
// Opcion alternativa para la ruta /suma usando un controlador
Route::get('/suma', [SumaController::class, 'index']);
// El metodo index tiene todas las instruciones a mostrar

// Llamado hacia la suma
Route::post('/suma', [SumaController::class, 'suma']);

Route::get('/productos', [ProductoController::class, 'index']);


/*Se crea un controlador para la suma mediante la siguiente instruccion
 en terminal--> php artisan make:controller SumaController
 */