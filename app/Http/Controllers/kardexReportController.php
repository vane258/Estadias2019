<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class kardexReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
 // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
     
    
    public function generar(Request $request){
        $materias=DB::table("kardexes")->where("Matricula_alumno","=",$request->id)->get();
        $alumno= DB::table("kardexes")->where("Matricula_alumno","=",$request->id)->orderBy('id','asc')->first();
        
       $view= \View::make('kardexReport',compact('alumno',"materias"))->render();
       $ka=\App::make('dompdf.wrapper');
       $ka->loadHTML($view);
       //retorna la vista 
       return $ka->stream('kardexReport','.pdf');
    
    }
}