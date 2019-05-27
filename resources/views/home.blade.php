@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Información</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('uploads/files') .'/' .$user->foto }}" class="rounded mx-auto d-block" alt="imagen de empresa">
                        </div>
                        <div class="col-md-6">
                            <h3><strong>{{ $user->nombre}}</strong></h3>
                            <p>Dirección: {{ $user->direccion}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Empleos</div>
                <div class="card-body">
                    <table class="table table-light table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Puesto</th>
                                <th>Salario</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empleos as $empleo)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $empleo->puesto }}</td>
                                <td>{{ $empleo->salario_minimo }} - {{ $empleo->salario_maximo }}</td>
                                <td>{{ $empleo->correo_contacto}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
