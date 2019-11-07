<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ReportMaestrosController extends Controller
{
    //
    public function _construct(){
        $this->middleware('guest');
    }
    
    //esta funcion se encarga de pasar todos los datos de la bd (campos de una tabla especifica)  a la vista que
    //le hayamos indicado en $view la palabra make refiere a que se haga la vista con los datos que estamos seleccionando
    // con el select o mas bien que deposite esos datos dentro de la tabla en la vista que nosostros indiquemos
    
    public function generar(Request $request){
        $materias=DB::table("maestros_materias")->where("clave_maestro","=",$request->id)->get();
        $alumno= DB::table("maestros_materias")->where("clave_maestro","=",$request->id)->orderBy('id','asc')->first();
        
       $view= \View::make('ReportMaestro',compact('alumno',"materias"))->render();
       $pdf1=\App::make('dompdf.wrapper');
       $pdf1->loadHTML($view);
       //retorna la vista 
       return $pdf1->stream('ReportMaestro','.pdf');
          
    }
    }
