<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasOfertarPDFCOntroller extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
 // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    
    public function generar(){
    $ofertar=\DB::table('asignaturas_ofertars')
        ->select(['id','Nombre_alumno','Generacion','plan_estudios','sede','cursando_cuatrimestre'])
    // obtiene los datos mediante el metodo get  
        ->get();
     // hace la vista  y la carga en formato pdf
       $view= \View::make('MateriasOfertarReport',compact('ofertar'))->render();
       $mo=\App::make('dompdf.wrapper');
       $mo->loadHTML($view);
      //retorna la vista   
       return $mo->stream('MateriasOfertarReport','.pdf');
    
    }
}