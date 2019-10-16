<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReinscripcionesPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
// esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(){
    $reis=\DB::table('reinscripciones')
        ->select(['id','carrera','plan_estudios','Nombre_alumno','campus','up'])
    // obtiene los datos mediante el metodo get  
        ->get();
           // hace la vista  y la carga en formato pdf

       $view= \View::make('ReinscripcionesReport',compact('reis'))->render();
       $R=\App::make('dompdf.wrapper');
       $R->loadHTML($view);
       //retorna la vista 
       return $R->stream('ReinscripcionesReport','.pdf');
    
    }
}