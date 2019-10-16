<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosBajaPDFController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 

    public function generar(){
        // selecciona los datos de la tabla establecida

    $baja=\DB::table('alumnos_bajas')
        ->select(['id','Nombre_alumno','fecha','Estatus','Motivo','Anotaciones'])
                // obtiene los datos mediante el metodo get

        ->get();
                // hace un nuevo controller
                $As=new AlumnosBajaPDFController();
                        // le pasa los datps a la vista 

       $view= \View::make('AlumnosBajaReport',compact('baja'))->render();
              // hace la vista  y la carga en formato pdf

       $Ab=\App::make('dompdf.wrapper');
       $Ab->loadHTML($view);
              // retorna la vista 

       return $Ab->stream('AlumnosBajaReport','.pdf');
    
    }
}