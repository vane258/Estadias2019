<?php

namespace App\Http\Controllers;

use App\ListaAsistencia;
use Illuminate\Http\Request;


class ListaAsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    // esto pide una respuesta a la vista del tipo get para obtener el campo por el cual
     //nosotros deseamos hacer la busqueda.
    $nombre_maestro=$request->get('Nombre_maestro');
    // se le pasa el arreglo de todos los datos a la vista de la Bd y se ordenan ascendentemente 
    $datos['lista']= ListaAsistencia::orderBy('Nombre_alumno','ASC')
    ->nombre_maestro($nombre_maestro)
    //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index
   ->paginate(5);
  //regresa la vista donde se visualizan los datos 
    return view('ListaAsistencia.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {//retorna a la vista create.blade.php dentro de la carpeta de este reporte 
        return view ('/ListaAsistencia.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {// se hace un array con todos los campos que se van a insertar en la bd y se le pone
    // una condicion de require para que se obligatorio introducir valores en todos los campos del
    // formulario
       $campos=[
        'Nombre_Maestro'=>'required|string|max:100',
         'Nombre_Materia' =>'required|string|max:100',
         'Periodo' =>'required|string|max:100',
         'Grupo' =>'required|string|max:100',
         'Nombre_alumno' =>'required|string|max:100',
       ];
      // es una variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir
       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $lista=request()->except('_token','_method');
        ListaAsistencia::insert($lista);
        return redirect('ListaAsistencia')->with('Mensaje','Maestro agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListaAsistencia  $ListaAsistencia
     * @return \Illuminate\Http\Response
     */
    public function show(ListaAsistencia $ListaAsistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListaAsistencia $ListaAsistencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {// es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar
        $lista=ListaAsistencia::findorfail($id);
        return view('ListaAsistencia.edit',compact('lista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HorarioAula  $HorarioAula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {// es para que actualice a cada uno de los campos segun el registro o fila seleccionado 
    // el parametro para decidir es el id.
        $lista=request()->except(['_token','_method']);
        ListaAsistencia::where('id','=',$id)->update($maestro);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('ListaAsistencia')->with('Mensaje','Maestro(a) modificado(a) con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListaAsistencia $ ListaAsistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {// funcion que elimina completamente toda la informacion referente a un id o fila 
     // segun le hayamos dado la instruccion.
        $lista=ListaAsistencia::findorfail($id);
        HorarioMaestros::destroy($id);
        return redirect('ListaAsistencia')->with('Mensaje','Maestro Eliminado con Exito');
        //
    }
}
