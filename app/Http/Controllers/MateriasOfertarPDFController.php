<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MateriasOfertarPDFCOntroller extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
 // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    

        public function generar(Request $request){
            $materias=DB::table("asignaturas_ofertars")->where("clave_materia","=",$request->id)->get();
            $alumno= DB::table("asignaturas_ofertars")->where("clave_materia","=",$request->id)->orderBy('id','asc')->first();
            
           $view= \View::make('MateriasOfertarReport',compact('alumno',"materias"))->render();
           $mo=\App::make('dompdf.wrapper');
           $mo->loadHTML($view);
           //retorna la vista 
           return $mo->stream('MateriasOfertarReport','.pdf');
          
    }
}