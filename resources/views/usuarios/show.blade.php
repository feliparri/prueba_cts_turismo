@extends('layouts.app')

@section('content')
    <div class="panel" style="width: 50%;margin: 0 auto;display: table;border: 1px solid silver;padding: 34px;box-shadow: 4px -1px 27px silver;">
        <div class="row">
            <div class="col-lg-6 margin-tb">
                <div class="pull-left">
                    <h2> Vista Usuario</h2>
                </div>
               
            </div>
        </div>
       
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
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
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Comentarios:</strong>
                    {{ $usuario->detail }}
                </div>
            </div>
             <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
                </div>
        </div>
    </div>
@endsection