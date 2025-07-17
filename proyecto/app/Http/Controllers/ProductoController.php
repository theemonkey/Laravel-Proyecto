<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index()
    {
        // Lógica para mostrar la lista de productos
        $productos = Producto::all();  // Obtiene todos los productos de la base de datos
        return view('productos.index', compact('productos'));
    }
}
