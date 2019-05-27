@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ url('users/' .$user->id .'/update') }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="nombre" class="control-label">{{'Nombre'}}</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value=" {{ $user->nombre }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="direccion" class="control-label">{{'Direccion'}}</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" value=" {{ $user->direccion }}">
                        </div>
                    
                        <input type="submit" value="Actualizar" class="btn btn-success">
                        <a href="{{ url('home') }}">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection