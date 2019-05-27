@extends('layouts.app')

@section('content')
<div class="container py-4">
    
    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Puesto</th>
                <th>Salario</th>
                <th>Correo</th>
                <th>Empresa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleos as $empleo)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $empleo->puesto }}</td>
                <td>{{ $empleo->salario_minimo }} - {{ $empleo->salario_maximo }}</td>
                <td>{{ $empleo->correo_contacto}}</td>
                <td>{{ $empleo->nombre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $empleos->links() }}
</div>
@endsection