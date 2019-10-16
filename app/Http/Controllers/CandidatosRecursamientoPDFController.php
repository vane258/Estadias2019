<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatosRecursamientoPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
     
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 
    public function generar(){
        // selecciona los datos de la tabla establecida

    $candidato=\DB::table('candidatos_recursamientos')
        ->select(['id','Nombre_alumno','plan_estudios','campus','Nombre_Materia','Nombre_maestro','Total_unidades'])
                // obtiene los datos mediante el metodo get

        ->get();
               // hace la vista  y la carga en formato pdf

       $view= \View::make('CandidatosRecursamientoReport',compact('candidato'))->render();
       $cr=\App::make('dompdf.wrapper');
       $cr->loadHTML($view);
              // retorna la vista 

       return $cr->stream('CandidatosRecursamientoReport','.pdf');
    
    }
}