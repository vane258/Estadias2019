<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspirantesReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
    
    // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
    // seleccionandolos de la tabla que se le indique 

    public function generar(){

// selecciona los datos de la tabla establecida
    $asp=\DB::table('aspirantes')
        ->select(['id','Nombre_alumno','carrera','f_nac','edad','folio_ceneval','pts_ceneval','genero','edoNacimiento','telefono','escp','mescp','mpio','edo'])
        // obtiene los datos mediante el metodo get
        ->get();
        // hace un nuevo controller
        $As=new AspirantesReportController();
        // le pasa los datps a la vista 
       $view= \View::make('AspirantesReport',compact('asp'))->render();
       // hace la vista  y la carga en formato pdf
       $As=\App::make('dompdf.wrapper');
       $As->loadHTML($view);
       // define el tamanio y orientacion de la hoja 
       $As->setPaper('legal','landscape');
       // retorna la vista 
       return $As->stream('AspirantesReport','.pdf');
     
    }
}