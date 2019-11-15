<?php

namespace App\Http\Controllers;

use App\Certificado;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)


    {
     // esto pide una respuesta a la vista del tipo get para obtener el campo por el cual
    //nosotros deseamos hacer la busqueda
        $nombre_alumno=$request->get('Nombre_alumno');
    // se le pasa el arreglo de todos los datos a la vista de la Bd y se ordenan ascendentemente 
        $datos['cer']= Certificado::orderBy('Nombre_alumno','ASC')
    ->nombre_alumno($nombre_alumno)
    //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index
    ->paginate(5);
    //regresa la vista donde se visualizan los datos
    return view('Certificado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/Certificado.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // se hace un array con todos los campos que se van a insertar en la bd y se le pone
        // una condicion de require para que se obligatorio introducir valores en todos los campos del
        // formulario
       $campos=[
         'Matricula' =>'required|string|max:100',
         'Nombre_alumno' =>'required|string|max:100',
         'Clave_Materia'=>'required|string|max:100',
         'Nombre_Materia'=>'required|string|max:100',
         'Nd'=>'required|string|max:100',
         'cal'=>'required|string|max:100',
         'creditos'=>'required|string|max:100',
         'cuatrimestre'=>'required|string|max:100',
         'carrera'=>'required|string|max:100',
         'periodo'=>'required|string|max:100',
         'mes'=>'required|string|max:100'
         
        
       ];
       // es una variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir
       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $cer=request()->except('_token','_method');
        Certificado::insert($cer);
        return redirect('Certificado')->with('Mensaje','Alumno agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificado $Certificado
     * @return \Illuminate\Http\Response
     */
    public function show(Certificado $Certificado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificado $Certificado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar
        $cer=Certificado::findorfail($id);
        return view('Certificado.edit',compact('cer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificado $Certificado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        // es para que actualice a cada uno de los campos segun el registro o fila seleccionado 
        // el parametro para decidir es el id.
        $cer=request()->except(['_token','_method']);
        Certificado::where('id','=',$id)->update($cer);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('Certificado')->with('Mensaje','Alumno modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificado $constancias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     // funcion que elimina completamente toda la informacion referente a un id o fila 
    // segun le hayamos dado la instruccion.
        $cer=Certificado::findorfail($id);
        Certificado::destroy($id);
        return redirect('Certificado')->with('Mensaje','Alumno Eliminado con Exito');
        //
    }
}