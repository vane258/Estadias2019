<?php

namespace App\Http\Controllers;

use App\BecasAsignadas;
use Illuminate\Http\Request;

class BecasAsignadasController extends Controller
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
    $datos['beca']= BecasAsignadas::orderBy('Nombre_alumno','ASC')
    ->nombre_alumno($nombre_alumno)
    //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index
    ->paginate(5);
    return view('BecasAsignadas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //regresa la vista o formulario de crear
        return view ('/BecasAsignadas.create');
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
         'plan_estudios'=>'required|string|max:100',
         'carrera'=>'required|string|max:100',
         'sede'=>'required|string|max:100',
         'genero'=>'required|string|max:100',
         'generacion'=>'required|string|max:100',
         'tipo_beca'=>'required|string|max:100',
         'periodo_beca'=>'required|string|max:100',
        
       ];
       // es una variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir
       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $beca=request()->except('_token','_method');
        BecasAsignadas::insert($beca);
        return redirect('BecasAsignadas')->with('Mensaje','Alumno con beca agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BecasAsignadas $BecasAsignadas
     * @return \Illuminate\Http\Response
     */
    public function show(BecasAsignadas $BecasAsignadas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BecasAsignadas $BecasAsignadas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {// es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar
        $beca=BecasAsignadas::findorfail($id);
        return view('BecasAsignadas.edit',compact('beca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlumnosBaja $AlumnosBaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        // es para que actualice a cada uno de los campos segun el registro o fila seleccionado 
        // el parametro para decidir es el id.
        $beca=request()->except(['_token','_method']);
        BecasAsignadas::where('id','=',$id)->update($beca);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('BecasAsignadas')->with('Mensaje','Alumno con Beca modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BecasAsignadas $BecasAsignadas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {// funcion que elimina completamente toda la informacion referente a un id o fila 
    // segun le hayamos dado la instruccion.
        $beca=BecasAsignadas::findorfail($id);
        BecasAsignadas::destroy($id);
        return redirect('BecasAsignadas')->with('Mensaje','Alumno con Beca Eliminado con Exito');
        //
    }
}