<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteBasePDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
// esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(){
    $base=\DB::table('reporte_bases')
        ->select(['id','Nombre_alumno','plan_estudios','carrera','campus','genero','generacion','edoNacimiento','Curp','nss','f_nac','mc','edescp','escp','edad'])
        // obtiene los datos mediante el metodo get  
        ->get();
       // hace la vista  y la carga en formato pdf 
       $view= \View::make('ReporteBaseReport',compact('base'))->render();
       $Rb=\App::make('dompdf.wrapper');
       $Rb->loadHTML($view);
       //configura el tamano y orientacion de la hoja del reporte
       $Rb->setPaper('legal','landscape');
       // retorna la vista 
       return $Rb->stream('ReporteBaseReport','.pdf');
    
    }
}