<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioMaestrosPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
          // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    
    public function generar(){
    $maestro=\DB::table('horario_maestros')
        ->select(['id','Nombre_Maestro','dia','hora'])
    // obtiene los datos mediante el metodo get

        ->get();
    // hace la vista  y la carga en formato pdf
       $view= \View::make('HorarioMaestrosReport',compact('maestro'))->render();
       $Hm=\App::make('dompdf.wrapper');
       $Hm->loadHTML($view);
       //retorna la vista
       return $Hm->stream('HorarioMaestrosReport','.pdf');
    
    }
}