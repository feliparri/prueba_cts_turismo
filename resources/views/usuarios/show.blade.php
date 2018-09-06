@extends('usuarios.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Vista Usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $usuario->nombre }}
            </div>
            <div class="form-group">
                <strong>Apellido Paterno:</strong>
                {{ $usuario->paterno }}
            </div>
            <div class="form-group">
                <strong>Apellido Materno:</strong>
                {{ $usuario->materno }}	
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comentarios:</strong>
                {{ $usuario->detail }}
            </div>
        </div>
    </div>
@endsection