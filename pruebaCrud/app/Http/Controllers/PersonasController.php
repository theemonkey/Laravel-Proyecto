<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        //pagina de inicio  
        // se cambio ::all a ::paginate para paginar los resultados
        $datos = Personas::orderBy('id', 'desc')->paginate(3);    //obtiene todos los registros de la base de datos
        return view('inicio', compact('datos')); //Valida info para enviarse como parámetro a la vista
    }

    public function create()
    {
        //el formulario donde agregamos datos a la base de datos
        return view('agregar'); //retorna la vista create.blade.php
    }

    public function store(Request $request)
    {
        //sirve para guardar los datos en la base de datos
        $personas = new Personas(); //crea una nueva instancia del modelo Personas
        $personas->nombre = $request->post('nombre'); //obtiene el valor del campo nombre del formulario
        $personas->apellido = $request->post('apellido'); //obtiene el valor del campo apellido del formulario
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento'); //obtiene el valor del campo fecha del formulario
        $personas->save();    //guarda los datos en la base de datos

        return redirect()->route('personas.index')->with("success", "Agregado con exito!"); //redirecciona a la ruta personas.index
    }

    public function show($id)
    {
        //se usa para obtener un registro especifico de la base de datos
        $personas = Personas::find($id); //busca el registro por su ID
        return view('eliminar', compact('personas'));
    }

    public function edit($id)
    {
        //sirve para editar un registro especifico de la base de datos
        //y los coloca en un formulario
        $personas = Personas::find($id); //busca el registro por su ID
        return view('actualizar', compact('personas')); //retorna la vista actualizar.blade.php
        //echo "Editar persona con ID: " . $id;
    }

    public function update(Request $request, $id)
    {
        //actuaiza los datos de un registro especifico de la base de datos
        $personas = Personas::find($id); //busca el registro por su ID
        $personas->nombre = $request->post('nombre'); //actualiza el campo nombre del registro
        $personas->apellido = $request->post('apellido'); //actualiza el campo apellido del registro
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento'); //actualiza el campo fecha del registro
        $personas->save(); //guarda los cambios en la base de datos

        return redirect()->route('personas.index')->with("success", "Actualizado con exito!"); //redirecciona a la ruta personas.index
    }

    public function destroy($id)
    {
        //elimina un registro especifico de la base de datos
        $personas = Personas::find($id); //busca el registro por su ID
        $personas->delete(); //elimina el registro de la base de datos

        return redirect()->route('personas.index')->with("success", "Eliminado con exito!"); //redirecciona a la ruta personas.index
    }
}
