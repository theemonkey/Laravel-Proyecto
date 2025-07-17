@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

<br><br>
@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar nuevo</h5>
        <div class="card-body">
            <p class="card-text">
                <form action="{{ route('personas.store') }}" method="POST">
                    @csrf
                    <div class="alert alert-info" role="alert">
                        Ingrese los datos de la nueva persona
                    </div>
                <form action="#">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre"  class="form-control" required>
                    <label for="nombre">Apellido:</label>
                    <input type="text" name="apellido"  class="form-control" required>
                    <label for="nombre">Fecha de nacimiento:</label>
                    <input type="date" name="fecha_nacimiento"  class="form-control" required>
                    <br>
                    <button class="btn btn-danger">
                    <a href="{{route('personas.index')}}" class="btn btn-danger">
                        <span class="fas fa-undo-alt"></span>Regresar</a>
                    <button class="btn btn-danger">
                    <i class="fas fa-user-plus"></i>Agregar</button>
                </form>
            </p>
        </div>
</div>
@endsection
