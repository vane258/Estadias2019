<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ReinscripcionesPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
// esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(Request $request){
        $materias=DB::table("reinscripciones")->where("matricula","=",$request->id)->get();
        $alumno= DB::table("reinscripciones")->where("matricula","=",$request->id)->orderBy('id','asc')->first();
        
       $view= \View::make('ReinscripcionesReport',compact('alumno',"materias"))->render();
       $R=\App::make('dompdf.wrapper');
       $R->loadHTML($view);
       
       //retorna la vista 
       return $R->stream('ReinscripcionesReport','.pdf');
    }
}