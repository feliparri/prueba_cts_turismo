<?php

namespace App\Http\Controllers\Api;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function crearRegistro(Request $request)
    {
        
        $usuario_new = new Usuario();
        if($usuario_new)
        {
            $usuario_new->nombre  = $request->nombre;
            $usuario_new->paterno = $request->paterno;
            $usuario_new->materno = $request->materno;
            $usuario_new->detail  = $request->comentario;
            
            if($usuario_new->save())
            {
                return response()->json(['response'=>'ok','datos'=>$usuario_new]);
            }else{
                return response()->json(['response'=>'error','datos'=>'error al insertar']);
            }
        }
        else
        {
            return response()->json(['response'=>'error','datos'=>'error al crear registro']);
        }
    }

    public function actualizarRegistro(Request $request, Usuario $usuario)
    {
        
        $usuario_new = Usuario::find($request->id);

        
        if($usuario_new)
        {
            $usuario_new->nombre  = isset($request->nombre)?$request->nombre:$usuario_new->nombre;
            $usuario_new->paterno = isset($request->paterno)?$request->paterno:$usuario_new->paterno;
            $usuario_new->materno = isset($request->materno)?$request->materno:$usuario_new->materno;
            $usuario_new->detail  = isset($request->comentario)?$request->comentario:$usuario_new->detail;

            if($usuario_new->save())
            {
                return response()->json(['response'=>'ok','datos'=>$usuario_new]);
            }else{
                return response()->json(['response'=>'error','datos'=>'error al actualizar']);
            }
        }
        else
        {
            return response()->json(['response'=>'error','datos'=>'EL REGISTRO NO EXISTE']);
        }
    }

    public function muestraTodo(Usuario $usuario)
    {
        if(Usuario::all())
        {
            return response()->json(['response'=>'ok','datos'=>Usuario::all()]);
        }else{
            return response()->json(['response'=>'error','datos'=>'SIN DATOS']);
        }
        
    }

    public function muestraPorId(Request $request, Usuario $usuario)
    {   
        if(Usuario::find($request->id)){
            return response()->json(['response'=>'ok','datos'=>Usuario::find($request->id)]);
        }else{
            return response()->json(['response'=>'error','datos'=>'SIN DATOS']);
        }
        
    }

    public function borrar(Request $request, Usuario $usuario)
    {   
        $usuario_new = Usuario::find($request->id);

        if($usuario_new!=null){
            if($usuario_new->delete())
            {
               return response()->json(['response'=>'ok','datos'=>$usuario_new]);
            }
            else
            {
                return response()->json(['response'=>'error','datos'=>'ERROR AL BORRAR EL REGISTRO']);
            }
        }
        else
        {
            return response()->json(['response'=>'error','datos'=>'EL REGISTRO NO EXISTE']);
        }
        
    }

   
}
