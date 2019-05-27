@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/empleos') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="puesto" class="control-label">{{'Puesto'}}</label>
                            <input type="text" name="puesto" id="puesto" class="form-control" value=" {{ old('puesto') }}">
                        </div>

                        <div class="form-group">
                            <label for="descripcion" class="control-label">{{'Descripcion'}}</label>
                            <textarea type="text" name="descripcion" id="descripcion" class="form-control" >{{ old('descripcion') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="salario_minimo" class="control-label">{{'Salario Minimo'}}</label>
                            <input type="number" name="salario_minimo" id="salario_minimo" class="form-control" value=" {{ old('salario_minimo') }}">
                        </div>

                        <div class="form-group">    
                            <label for="salario_maximo" class="control-label">{{'Salario Maximo'}}</label>
                            <input type="number" name="salario_maximo" id="salario_maximo" class="form-control" value="{{ old('salario_maximo') }}">
                        </div>

                        <div class="form-group">
                            <label for="ubicacion" class="control-label">{{'Ubicacion'}}</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="{{ old('ubicacion') }}">
                        </div>

                        <div class="form-group">
                            <label for="correo_contacto" class="control-label">{{'Correo Contacto'}}</label>
                            <input type="mail" name="correo_contacto" id="correo_contacto" class="form-control" value="{{ old('correo_contacto') }}">
                        </div>

                        <input type="hidden" name="empresa_id" id="empresa" value="{{ auth()->user()->id }}">


                        <input type="submit" value="Agregar" class="btn btn-success">
                        <a href="{{ url('home') }}">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    