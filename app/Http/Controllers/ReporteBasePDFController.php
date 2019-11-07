<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteBasePDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
// esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique     
    
public function generar(Request $request){
    $materias=DB::table("reporte_bases")->where("Matricula","=",$request->id)->get();
    $alumno= DB::table("reporte_bases")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();
    
    $view= \View::make('ReporteBaseReport',compact('alumno',"materias"))->render();
    $Rb=\App::make('dompdf.wrapper');
   $Rb->loadHTML($view);
   $Rb->setPaper('legal','landscape');
 //retorna la vista 
   return $Rb->stream('ReporteBaseReport','.pdf');

    }
}