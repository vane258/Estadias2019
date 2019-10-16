<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorialAcademicoReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
   // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(){
    $historial=\DB::table('historials')
        ->select(['id','periodo','Nombre_alumno','carrera','plan_estudios','Prom_general','modalidad','creditos','Nombre_Materia','Clave_Materia','cuatrimestre','calificacion','resultado','curso','creditos_materia'])
          // obtiene los datos mediante el metodo get

        ->get();
            // hace la vista  y la carga en formato pdf
       $view= \View::make('HistorialReport',compact('historial'))->render();
       $Hi=\App::make('dompdf.wrapper');
       $Hi->loadHTML($view);
       //retorna la vista 
       return $Hi->stream('HistorialReport','.pdf');
    
    }
}