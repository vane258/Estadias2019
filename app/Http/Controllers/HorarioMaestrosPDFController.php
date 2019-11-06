<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HorarioMaestrosPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
          // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
    
    public function generar(Request $request){
        $materias=DB::table("horario_maestros")->where("clave_maestro","=",$request->id)->get();
        $alumno= DB::table("horario_maestros")->where("clave_maestro","=",$request->id)->orderBy('id','asc')->first();
        
       $view= \View::make('HorarioMaestrosReport',compact('alumno',"materias"))->render();
       $Hm=\App::make('dompdf.wrapper');
       $Hm->loadHTML($view);
       //retorna la vista 
       return $Hm->stream('HorarioMaestrosReport','.pdf');
    
    }
}