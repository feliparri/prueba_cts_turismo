@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">OPCIONES DEL MANTENEDOR</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Comentarios</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->paterno }}</td>
                            <td>{{ $usuario->materno }}</td>
                            <td>{{ $usuario->detail }}</td>
                            <td>
                                <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                   
                                    <a class="btn btn-info" href="{{ route('usuarios.show',$usuario->id) }}">Mostrar</a>

                 
                    
                                    <a class="btn btn-primary" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                   
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('usuarios.create') }}"> CREAR USUARIO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
