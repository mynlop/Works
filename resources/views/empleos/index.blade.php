@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/empleos/create') }}" class="btn btn-primary">Agregar Empleo</a>
    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Puesto</th>
                <th>Salario</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleos as $empleo)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $empleo->puesto }}</td>
                <td>{{ $empleo->salario_minimo }} - {{ $empleo->salario_maximo }}</td>
                <td>{{ $empleo->correo_contacto}}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('/empleos/' .$empleo->id .'/edit') }}">Editar</a> 
                    <form action="{{ url('/empleos/' .$empleo->id) }}" method="post" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Seguro que deseas borrar?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection