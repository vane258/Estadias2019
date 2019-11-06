<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnosBajaPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 

    public function generar(Request $request){
        // selecciona los datos de la tabla establecida

// selecciona los datos de la tabla establecida
$materias=DB::table("alumnos_bajas")->where("Matricula","=",$request->id)->get();
$alumno= DB::table("alumnos_bajas")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();

$view= \View::make('AlumnosBajaReport',compact('alumno',"materias"))->render();
$Ab=\App::make('dompdf.wrapper');
$Ab->loadHTML($view);
//retorna la vista 
return $Ab->stream('AlumnosBajaReport','.pdf');
  
    }
}