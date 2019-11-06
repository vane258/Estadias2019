<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CertificadoReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 
    public function generar(Request $request){
                // selecciona los datos de la tabla establecida

                $materias=DB::table("certificados")->where("Matricula","=",$request->id)->get();
                $alumno= DB::table("certificados")->where("Matricula","=",$request->id)->orderBy('id','asc')->first();
                
                $view= \View::make('CertificadoReport',compact('alumno',"materias"))->render();
                $Ce=\App::make('dompdf.wrapper');
                $Ce->loadHTML($view);
                // define el tamanio y orientacion de la hoja 
                $Ce->setPaper('legal');
                //retorna la vista 
                return $Ce->stream('CertificadoReport','.pdf');
                  
    }
}