@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card p-4">
                <h2>{{$empleo->puesto}}</h2>
                <hr>
                <div style="white-space:pre-line;">{{$empleo->descripcion}}</div>
                <hr>
                <p class="m-0"><strong> Salario Minimo:</strong> {{$empleo->salario_minimo}}</p>
                <p><strong>Salario Maximo:</strong> {{$empleo->salario_maximo}}</p>
                <p><strong>Ubicación:</strong> {{$empleo->ubicacion}}</p>
                <p><strong>Contactar a:</strong> {{$empleo->correo_contacto}}</p>
            </div>
            <a href="{{ url('empleos') }}" class="btn btn-info">Regresar</a>
        </div>
    </div>
</div>
@endsection
