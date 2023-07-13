<?php

namespace App\Http\Controllers;
use App\Models\Establecimiento;
use App\Models\Responsable;




use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class EstablecimientoController extends Controller
{
    public function index(){
        $establecimientos = Establecimiento::all();
        return view('establecimientos.mostrar',compact("establecimientos"));
    
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

    public function edit($id)
     {
     $establecimientos = Establecimiento::findOrFail($id);
     return view('establecimientos.edit', compact('establecimientos'));
     }

    public function update(Request $request, $id)
    {
    $establecimientos = Establecimiento::findOrFail($id);
    $establecimientos->nombreEst = $request->input('nombreEst');
    $establecimientos->save();
    return redirect()->route('establecimientos.index')->with('success', 'Establecimiento actualizado correctamente');
    }


     public function show($id)
    {
    $post = Responsable::findOrFail($id);
    return view('responsables.show', compact('post'));
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
