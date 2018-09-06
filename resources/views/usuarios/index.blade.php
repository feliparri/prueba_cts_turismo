@extends('usuarios.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PRUEBA CTS TURISMO</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usuarios.create') }}"> CREAR USUARIO</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Comentarios</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ ++$i }}</td>
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
  
    {!! $usuarios->links() !!}
      
@endsection