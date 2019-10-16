<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificadoReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 
    public function generar(){
                // selecciona los datos de la tabla establecida

    $baja=\DB::table('certificados')
        ->select(['id','Nombre_alumno','Clave_Materia','Nombre_Materia','Nd','cal','creditos','cuatrimestre','carrera','periodo','mes'])
                        // obtiene los datos mediante el metodo get

        ->get();
                       // hace la vista  y la carga en formato pdf

       $view= \View::make('CertificadoReport',compact('baja'))->render();
       $Ce=\App::make('dompdf.wrapper');
       $Ce->loadHTML($view);
       //le da tamano  a la hoja del reporte
       $Ce->setPaper('legal');
       //retorna la vista 
       return $Ce->stream('CertificadoReport','.pdf');
    
    }
}