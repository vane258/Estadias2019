<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kardexReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
 // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
     
    
    public function generar(){
    $alumno=\DB::table('kardexes')
        ->select(['id','Nombre_alumno','carrera','plan_estudios','promedio_gral','creditos','porcentaje_avance','id_Materia','Nombre_Materia','Cal','Resultado','curso','creditos_materia','periodo'])
        // obtiene los datos mediante el metodo get
        ->get();
        // hace la vista  y la carga en formato pdf
       $view= \View::make('kardexReport',compact('alumno'))->render();
       $ka=\App::make('dompdf.wrapper');
       $ka->loadHTML($view);
       //retorna la vista 
       return $ka->stream('kardexReport','.pdf');
    
    }
}