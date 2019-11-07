<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MateriasReprobadasPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }

 // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
public function generar(Request $request){
    $materias=DB::table("materias_reprobadas")->where("Matricula","=",$request->id)->get();
    $alumno= DB::table("materias_reprobadas")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();
    
   $view= \View::make('MateriasReprobadasReport',compact('alumno',"materias"))->render();
   $Mr=\App::make('dompdf.wrapper');
   $Mr->loadHTML($view);
   //retorna la vista 
   return $Mr->stream('MateriasReprobadasReport','.pdf');
  
    }
}