<?php

namespace App\Http\Controllers;
use App\Models\asignarResponsable;
use App\Models\Responsable;




use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    public function index(){
        $responsables = Responsable::All();
        return view("responsables.mostrar")
        ->with("responsables", $responsables);
    
    }
     public function registrar(){
        return view("responsables.registrar");
     }


     public function guardar(Request $request){
        $validacion = $request->validate([
            "nombres" =>"required",
            "email" =>"required",
        ]);

        
        Responsable::create($request->all());
        return redirect("/responsables/mostrar");
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
            if(Responsable::where('username', $username)->first("username")==null){
                return "no existe";
            }
            else{
                if(Responsable::where('password', $password)->first("password")!=null){
                    return "logueado";
                }
                else{
                    return "no existe";


        }
    
    }
}
}


