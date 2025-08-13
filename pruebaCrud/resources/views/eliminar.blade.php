@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar un registro')

<br><br>
@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar una persona</h5>
        <div class="card-body">
            <p class="card-text">
                <div class="alert alert-danger" role="alert">
                    Esta seguro de eliminar este registro!

                    <table class="table table-sm table-hover table-bordered" style="background-color: white">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $personas->nombre}}</td>
                            <td>{{ $personas->apellido}}</td>
                            <td>{{ $personas->fecha_nacimiento}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('personas.index')}}" class="btn btn-info">
                            <span class="fas fa-undo-alt"></span>Regresar</a>
                        <button class="btn btn-danger">
                            <span class="fas fa-user-times"></span>Eliminar</button>
                    </form>
                </div>
            </p>
        </div>
</div>
@endsection
