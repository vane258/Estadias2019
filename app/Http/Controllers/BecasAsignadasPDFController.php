<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BecasAsignadasPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
      // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 

    public function generar(Request $request){
        // selecciona los datos de la tabla establecida

        $materias=DB::table("becas_asignadas")->where("Matricula","=",$request->id)->get();
        $alumno= DB::table("becas_asignadas")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();
        
        $view= \View::make('BecasAsignadasReport',compact('alumno',"materias"))->render();
        $Ba=\App::make('dompdf.wrapper');
        $Ba->loadHTML($view);
        //retorna la vista 
        return $Ba->stream('BecasAsignadasReport','.pdf');
    }
}