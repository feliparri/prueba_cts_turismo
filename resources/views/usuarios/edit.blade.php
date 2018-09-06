@extends('usuarios.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Usuarios</h2>
            </div>
            
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hubo un problema al actualizar el usuario.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('usuarios.update',$usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $usuario->nombre }}" class="form-control" placeholder="nombre">
                </div>
                <div class="form-group">
                    <strong>Apellido Paterno:</strong>
                    <input type="text" name="paterno" value="{{ $usuario->paterno }}" class="form-control" placeholder="apellido paterno">
                </div>
                <div class="form-group">
                    <strong>Apellido Materno:</strong>
                    <input type="text" name="materno" value="{{ $usuario->materno }}" class="form-control" placeholder="apellido materno">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Comentarios:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Comentarios">{{ $usuario->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success">Actualizar</button>
              <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
            </div>
        </div>
   
    </form>
@endsection