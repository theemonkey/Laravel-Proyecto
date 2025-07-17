@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel')
    <div class="container">
    </div>

@section('contenido')
<br><br>

<div class="card">
  <div class="card-header">
        Crud con Laravel y mysql
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-sm-12">
            @if($mensaje = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$mensaje}}
            </div>
                @endif
        </div>
        <h5 class="card-title text-center">Listado de personas en el sistema</h5>
        <p>
            <a href="{{route('personas.create')}}" class="btn btn-primary">
                <i class="fas fa-user-plus"></i> Agregar Nueva Persona
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm">
                    <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $persona)
                            <tr>
                                <td>{{$persona->nombre}}</td>
                                <td>{{$persona->apellido}}</td>
                                <td>{{$persona->fecha_nacimiento}}</td>
                                <td>
                                    <form action="{{ route('personas.edit', $persona->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="fas fa-user-edit"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('personas.show', $persona->id) }}" method="GET">
                                        <button class="btn btn-danger btn-sm">
                                            <span class="fas fa-user-times"></span>
                                        </button>
                                    </form>
                                </td>
                            <tr>
                        @endforeach
                </table>
                <hr>
            </div>
            <div class="row">  <!-- Usar para Paginacion-->
                    <div class="col-sm-12">
                        {{$datos->links()}}
                    </div>
            </div>
        </p>
  </div>
</div>

    <!--<div class="container">
        <h2>Contenido Principal</h2>
        <i class="fab fa-500px"></i>
        <br>
        <a href="{{route('personas.create')}}">Agregar</a>
    </div>!-->

@endsection