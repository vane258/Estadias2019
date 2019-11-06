<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AspirantesReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 

    public function generar(Request $request){

// selecciona los datos de la tabla establecida
$materias=DB::table("aspirantes")->where("Matricula","=",$request->id)->get();
$alumno= DB::table("aspirantes")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();

$view= \View::make('AspirantesReport',compact('alumno',"materias"))->render();
$As=\App::make('dompdf.wrapper');
$As->loadHTML($view);
// define el tamanio y orientacion de la hoja 
$As->setPaper('legal','landscape');
//retorna la vista 
return $As->stream('AspirantesReport','.pdf');
    }
}