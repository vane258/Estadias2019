<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ListaAsistenciaReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
   // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(Request $request){
        $materias=DB::table("lista_asistencias")->where("clave_materia","=",$request->id)->get();
        $alumno= DB::table("lista_asistencias")->where("clave_materia","=",$request->id)->orderBy('id','asc')->first();
        
        $view= \View::make('ListaAsistenciaReport',compact('alumno',"materias"))->render();
        $Lo=\App::make('dompdf.wrapper');
       $Lo->loadHTML($view);
       $Lo->setPaper('A4','landscape');
     //retorna la vista 
       return $Lo->stream('ListaAsistenciaReport','.pdf');
    
    }
}