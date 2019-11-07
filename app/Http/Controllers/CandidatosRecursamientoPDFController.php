<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CandidatosRecursamientoPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
     
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 
    public function generar(Request $request){
        $materias=DB::table("candidatos_recursamientos")->where("Matricula","=",$request->id)->get();
        $alumno= DB::table("candidatos_recursamientos")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();
        
       $view= \View::make('CandidatosRecursamientoReport',compact('alumno',"materias"))->render();
       $cr=\App::make('dompdf.wrapper');
       $cr->loadHTML($view);
       //retorna la vista 
       return $cr->stream('CandidatoRecursamientoReport','.pdf');
      
    }
}