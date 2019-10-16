<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormatoRegistroReportController extends Controller
{
    //
    public function _construct(){

        $this->middleware('guest');
    }
 // esta funcion es la que genera el pdf  con los datos trayendolos desde la bd los que le establezcamos 
// seleccionandolos de la tabla que se le indique    
    
    public function generar(){
    $formato=\DB::table('formato_registros')
        ->select(['id','Periodo','dia','Nombre_alumno','f_nac','Curp','sexo','mpio','edo','estadoC','email','referencias','escp','domesc','area'])
    // obtiene los datos mediante el metodo get
        ->get();
          // hace la vista  y la carga en formato pdf
       $view= \View::make('FormatoReport',compact('formato'))->render();
       $Fo=\App::make('dompdf.wrapper');
       $Fo->loadHTML($view);
    //le da tamano  a la hoja del reporte
       $Fo->setPaper('legal');
       //retorna la vista
       return $Fo->stream('FormatoReport','.pdf');
    
    }
}