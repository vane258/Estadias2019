<?php

namespace App\Http\Controllers;

use App\ReporteBase;
use Illuminate\Http\Request;

class ReporteBaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)


    {
    
        $nombre_alumno=$request->get('Nombre_alumno');
    $datos['base']= ReporteBase::orderBy('Nombre_alumno','ASC')
    ->nombre_alumno($nombre_alumno)
    ->paginate(5);
    return view('ReporteBase.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/ReporteBase.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $campos=[
         'Nombre_alumno' =>'required|string|max:100',
         'plan_estudios'=>'required|string|max:100',
         'carrera'=>'required|string|max:100',
         'campus'=>'required|string|max:100',
         'genero'=>'required|string|max:100',
         'generacion'=>'required|string|max:100',
         'edoNacimiento'=>'required|string|max:100',
         'Curp'=>'required|string|max:100',
         'nss'=>'required|string|max:100',
         'f_nac'=>'required|string|max:100',
         'mc'=>'required|string|max:100',
         'edescp'=>'required|string|max:100',
         'escp'=>'required|string|max:100',
         'edad'=>'required|int|max:100',
         'Cursando'=>'required|string|max:100'
       ];
       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $base=request()->except('_token','_method');
        ReporteBase::insert($base);
        return redirect('ReporteBase')->with('Mensaje','Alumno agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReporteBase $ReporteBase
     * @return \Illuminate\Http\Response
     */
    public function show(ReporteBase $ReporteBase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReporteBase $ReporteBase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $base=ReporteBase::findorfail($id);
        return view('ReporteBase.edit',compact('base'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReporteBase $ReporteBase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $base=request()->except(['_token','_method']);
        ReporteBase::where('id','=',$id)->update($base);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('ReporteBase')->with('Mensaje','Alumno modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReporteBase $ReporteBase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $base=ReporteBase::findorfail($id);
        ReporteBase::destroy($id);
        return redirect('ReporteBase')->with('Mensaje','Alumno Eliminado con Exito');
        //
    }
}