<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class constanciasReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 
    public function generar(Request $request){
          // selecciona los datos de la tabla establecida

          $materias=DB::table("constancias")->where("Matricula","=",$request->id)->get();
          $alumno= DB::table("constancias")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();
          
          $view= \View::make('constanciasReport',compact('alumno',"materias"))->render();
          $co=\App::make('dompdf.wrapper');
          $co->loadHTML($view);
          // define el tamanio y orientacion de la hoja 
          $co->setPaper('legal');
          //retorna la vista 
          return $co->stream('constanciasReport','.pdf');
            

    }
}