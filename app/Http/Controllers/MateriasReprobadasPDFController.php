<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasReprobadasPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }

 // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(){
    $materia=\DB::table('materias_reprobadas')
        ->select(['id','Nombre_alumno','Nombre_Materia','plan_estudios'])
    // obtiene los datos mediante el metodo get  
   ->get();
   // hace la vista  y la carga en formato pdf
       $view= \View::make('MateriasReprobadasReport',compact('materia'))->render();
       $Mr=\App::make('dompdf.wrapper');
       $Mr->loadHTML($view);
       //retorna la vista  
       return $Mr->stream('MateriasReprobadasReport','.pdf');
    
    }
}