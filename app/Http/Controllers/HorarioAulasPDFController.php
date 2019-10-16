<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioAulasPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
      // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    public function generar(){
    $aula=\DB::table('horario_aulas')
    // obtiene los datos mediante el metodo get

        ->select(['id','Nombre_aula','dia','hora'])
        ->get();
        // hace la vista  y la carga en formato pdf
       $view= \View::make('HorarioAulasReport',compact('aula'))->render();
       $Ha=\App::make('dompdf.wrapper');
       $Ha->loadHTML($view);
     //retorna la vista    
       return $Ha->stream('HorarioAulasReport','.pdf');
    
    }
}