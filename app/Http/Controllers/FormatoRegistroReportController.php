<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormatoRegistroReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
 // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique    
    
public function generar(Request $request){
    // selecciona los datos de la tabla establecida

    $materias=DB::table("formato_registros")->where("Matricula","=",$request->id)->get();
    $alumno= DB::table("formato_registros")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();
    
    $view= \View::make('FormatoReport',compact('alumno',"materias"))->render();
    $Fo=\App::make('dompdf.wrapper');
    $Fo->setPaper('legal','');
    $Fo->loadHTML($view);
    //retorna la vista 
    return $Fo->stream('FormatoReport','.pdf');
    }
}