<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::All();
        return view("usuarios.mostrar")
        ->with("usuarios", $usuarios);
    
    }
     public function registrar(){
        return view("usuarios.registrar");
     }


     public function guardar(Request $request){
        $validacion = $request->validate([
            "nombres" =>"required",
            "apellidos" =>"required",
            "pais"=>"required"
        ]);

        
        Usuario::create($request->all());
        return redirect("/usuarios/mostrar");
        /* $usuario->nombres =$request->input("nombres");
        $usuario->apellidos =$request->input("apellidos");
        $usuario->direccion =$request->input("direccion");
        $usuario->save();
        return redirect("/usuarios/mostrar"); */
        
     }

        public function login(){
            return view("autenticacion_form");
        }

        public function autenticar(Request $request){
            $username = $request->inpút("username");
            $password = $request->inpút("password");
            if(Usuario::where('username', $username)->first("username")==null){
                return "no existe";
            }
            else{
                if(Usuario::where('password', $password)->first("password")!=null){
                    return "logueado";
                }
                else{
                    return "no existe";


        }
    
    }
}
}
