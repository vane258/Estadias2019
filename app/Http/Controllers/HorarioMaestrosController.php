<?php

namespace App\Http\Controllers;

use App\HorarioMaestros;
use Illuminate\Http\Request;


class HorarioMaestrosController extends Controller
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
    $datos['maestro']= HorarioMaestros::orderBy('Nombre_maestro','ASC')
    ->nombre_maestro($nombre_maestro)
    //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index
    ->paginate(5);
    //regresa la vista donde se visualizan los datos
    return view('HorarioMaestros.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //retorna a la vista create.blade.php dentro de la carpeta de este reporte 
        return view ('/HorarioMaestros.create');
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
        'clave_maestro'=>'required|string|max:100',
        'Nombre_Maestro'=>'required|string|max:100',
         'dia' =>'required|string|max:100',
         'hora' =>'required|string|max:100',
        
       ];
     // es una variable que nos ayuda a imprimir un mensaje para saber cual fue el campo que se olvido introducir
       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $maestro=request()->except('_token','_method');
        HorarioMaestros::insert($maestro);
        return redirect('HorarioMaestros')->with('Mensaje','Maestro agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HorarioMaestros  $HorarioMaestros
     * @return \Illuminate\Http\Response
     */
    public function show(HorarioMaestros $HorarioMaestros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HorarioAulas  $HorarioAulas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {// es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar
        $maestro=HorarioMaestros::findorfail($id);
        return view('HorarioMaestros.edit',compact('maestro'));
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
        $maestro=request()->except(['_token','_method']);
        HorarioMaestros::where('id','=',$id)->update($maestro);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('HorarioMaestros')->with('Mensaje','Maestro modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HorarioAulas $ HorarioAulas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // funcion que elimina completamente toda la informacion referente a un id o fila 
     // segun le hayamos dado la instruccion.
        $maestro=HorarioMaestros::findorfail($id);
        HorarioMaestros::destroy($id);
        return redirect('HorarioMaestros')->with('Mensaje','Maestro Eliminado con Exito');
        //
    }
}
