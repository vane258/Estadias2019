<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(){
    $materias=\DB::table('materias_reprobadas')
        ->select(['id','Nombre_alumno','Nombre_Materia','plan_estudios'])
  
      // obtiene los datos mediante el metodo get  
      ->get();
            // hace la vista  y la carga en formato pdf
     
       $view= \View::make('reporte',compact('materias'))->render();
       $pdf=\App::make('dompdf.wrapper');
       $pdf->loadHTML($view);
       // retorna la vista 
       return $pdf->stream('informe','.pdf');
    
    }
}
