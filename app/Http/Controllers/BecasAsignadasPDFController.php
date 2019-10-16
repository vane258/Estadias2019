<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BecasAsignadasPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
      // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 

    public function generar(){
        // selecciona los datos de la tabla establecida

    $beca=\DB::table('becas_asignadas')
        ->select(['id','Nombre_alumno','plan_estudios','carrera','sede','genero','generacion','tipo_beca','periodo_beca'])
                // obtiene los datos mediante el metodo get
        ->get();
                // le pasa los datps a la vista 
       $view= \View::make('BecasAsignadasReport',compact('beca'))->render();
              // hace la vista  y la carga en formato pdf

       $Ba=\App::make('dompdf.wrapper');
       $Ba->loadHTML($view);
              // retorna la vista 

       return $Ba->stream('BecasAsignadasReport','.pdf');
    
    }
}