
@extends('layouts.app')

@section('content')

    <h2> Sumar 2 numeros </h2>
    <form action="/suma" method="POST">
        @csrf 
        <label for="num1">Numero 1: </label>
        <input type="number" name="num1" id="num1" required>
        <br>

        <label for="num2">Numero 2: </label>
        <input type="number" name="num2" id="num2" required>
        <br>

        <button type="submit">Sumar</button>
        <br>
    
</form>
        @if(isset($resultado))
            <h3>Resultado de la suma: {{$resultado}}</h3>
        @endif

@endsection