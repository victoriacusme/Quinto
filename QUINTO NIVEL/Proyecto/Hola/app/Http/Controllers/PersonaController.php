<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
class PersonaController extends Controller
{
 
  /*    public function show(){
         return view('Persona');
     }
     public function show1(){
        return view('Usuario');
     } */

    /*  public function arreglos(){
         $persona = [
                [
                 'nombre'=>'Victoria',
                 'apellido'=>'Cusme'
                 ,'años'=>'20'
                ],
                [
                    'nombre'=>'Victoria',
                    'apellido'=>'Cusme'
                    ,'años'=>'20'
                ]
            ];
           /*  dd($persona); */
           /*   return view('Persona', compact('persona')); 
         
     } */ 

     public function show(){
         $personas = Persona::all();
         return view('Persona',compact('personas'));
     }
     public function save(Request $request){
            
         $persona = new Persona();
         $persona->nombre= $request->nombre;
         $persona->apellido= $request->apellido;
         $persona->cedula=$request->cedula;
         $persona->tipo_persona=1;
         $persona->save(); 
          return redirect('/persona'); 
        }
    public function update(Request $request, $id){
        
      /*   $persona = Persona::find($id)->get(); */  /* traer el dato */
      $persona = Persona::find($id);
      $persona->nombre= $request->nombre;
      $persona->apellido= $request->apellido;
      $persona->cedula=$request->cedula;
      $persona->tipo_persona=1;
      $persona->save(); 
      return redirect('/persona'); 
        dd($persona->nombre);
    }
    public function editar($id){
        $persona = Persona::find($id);
        return view('Personaeditar',compact('persona'));
    }
    public function eliminar($id){
        $persona = Persona::find($id);
        $persona.delete->$id;
        return view('Personaeditar',compact('persona'));
    } 

}
