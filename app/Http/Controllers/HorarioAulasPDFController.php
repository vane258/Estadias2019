<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HorarioAulasPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
      // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
public function generar(Request $request){
  $materias=DB::table("horario_aulas")->where("clave_aula","=",$request->id)->get();
  $alumno= DB::table("horario_aulas")->where("clave_aula","=",$request->id)->orderBy('id','asc')->first();
  
 $view= \View::make('HorarioAulasReport',compact('alumno',"materias"))->render();
 $Ha=\App::make('dompdf.wrapper');
 $Ha->loadHTML($view);
 //retorna la vista 
 return $Ha->stream('HorarioAulasReport','.pdf');

    }
}