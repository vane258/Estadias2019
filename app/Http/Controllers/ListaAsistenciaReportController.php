<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaAsistenciaReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
   // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(){
    $lista=\DB::table('lista_asistencias')
        ->select(['id','Nombre_Maestro','Nombre_Materia','Periodo','Grupo','Nombre_alumno','curso'])
    // obtiene los datos mediante el metodo get  
        ->get();
          // hace la vista  y la carga en formato pdf
       $view= \View::make('ListaAsistenciaReport',compact('lista'))->render();
       $Lo=\App::make('dompdf.wrapper');
       $Lo->loadHTML($view);
       $Lo->setPaper('A4','landscape');
     //retorna la vista 
       return $Lo->stream('ListaAsistenciaReport','.pdf');
    
    }
}