<?php

namespace App\Http\Controllers;
use App\Models\Establecimiento;



use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function index(){
        $establecimientos = Establecimiento::All();
        return view("establecimientos.mostrar")
        ->with("establecimientos", $establecimientos);
    
    }
     public function registrar(){
        return view("establecimientos.registrar");
     }


     public function guardar(Request $request){
        $validacion = $request->validate([
            

        ]);

        
        Establecimiento::create($request->all());
        return redirect("/establecimientos/mostrar");
       
        
     }

        public function login(){
            return view("autenticacion_form");
        }

        public function autenticar(Request $request){
            $username = $request->inpút("username");
            $password = $request->inpút("password");
            if(Establecimiento::where('username', $username)->first("username")==null){
                return "no existe";
            }
            else{
                if(Establecimiento::where('password', $password)->first("password")!=null){
                    return "logueado";
                }
                else{
                    return "no existe";


        }
    
    }
}
}
