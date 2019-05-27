@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Información</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
    </div>
</div>
@endsection
