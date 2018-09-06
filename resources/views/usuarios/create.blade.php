@extends('usuarios.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar Nuevo Usuarios</h2>
        </div>
        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Hubo un problema al guardar el registro.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <strong>Paterno:</strong>
                <input type="text" name="paterno" class="form-control" placeholder="Paterno">
            </div>
            <div class="form-group">
                <strong>Materno:</strong>
                <input type="text" name="materno" class="form-control" placeholder="Materno">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comentario:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Comentarios"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
        </div>
    </div>
   
</form>
@endsection