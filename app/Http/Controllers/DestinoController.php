<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Destino;


class DestinoController extends Controller
{
    public function index(){
        $destinos = Destino::All();
        return view("destinos.mostrar")
        ->with("destinos", $destinos);
    
    }
     public function registrar(){
        return view("destinos.registrar");
     }


     public function guardar(Request $request){
        $validacion = $request->validate([
            
        ]);

        
        Destino::create($request->all());
        return redirect("/destinos/mostrar");
        
     }

        public function login(){
            return view("autenticacion_form");
        }

        public function autenticar(Request $request){
            $username = $request->inpút("username");
            $password = $request->inpút("password");
            if(Destino::where('username', $username)->first("username")==null){
                return "no existe";
            }
            else{
                if(Destino::where('password', $password)->first("password")!=null){
                    return "logueado";
                }
                else{
                    return "no existe";


        }
    
    }
}
}
