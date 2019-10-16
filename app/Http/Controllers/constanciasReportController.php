<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class constanciasReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 
    public function generar(){
    $cons=\DB::table('constancias')
        ->select(['id','Nombre_alumno','Materias','Cal','Fecha'])
       // obtiene los datos mediante el metodo get
        ->get();
      // hace la vista  y la carga en formato pdf
       $view= \View::make('constanciasReport',compact('cons'))->render();
       $co=\App::make('dompdf.wrapper');
       $co->loadHTML($view);
              //le da tamano  a la hoja del reporte

       $co->setPaper('legal');
              //retorna la vista 
       return $co->stream('constanciasReport','.pdf');
    
    }
}