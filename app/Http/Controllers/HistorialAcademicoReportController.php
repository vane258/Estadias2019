<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HistorialAcademicoReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
   // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(Request $request){
        $materias=DB::table("historials")->where("Matricula","=",$request->id)->get();
        $alumno= DB::table("historials")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();
        
       $view= \View::make('HistorialReport',compact('alumno',"materias"))->render();
       $Hi=\App::make('dompdf.wrapper');
       $Hi->loadHTML($view);
       //retorna la vista 
       return $Hi->stream('HistorialReport','.pdf');
    
    }
}