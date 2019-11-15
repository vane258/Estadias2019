<?php

namespace App\Http\Controllers;

use App\MateriasReprobadas;
use Illuminate\Http\Request;

class MateriasReprobadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {// esto pide una respuesta a la vista del tipo get para obtener el campo por el cual
     //nosotros deseamos hacer la busqueda.
    $nombre_Materia=$request->get('Nombre_Materia');
    // se le pasa el arreglo de todos los datos a la vista de la Bd y se ordenan ascendentemente 
    $datos['materias']= MateriasReprobadas::orderBy('Nombre_Materia','ASC')
    ->nombre_Materia($nombre_Materia)
    //con esto se muestran los registross en el index o tabla de 5 en 5  y lo retorna a la vista index
    ->paginate(15);
    //regresa la vista donde se visualizan los datos 
    return view('MateriasReprobadas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna la vista create.blade.php que es donde se regitran nuevos registros
        return view ('/MateriasReprobadas.create');
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
         'Clave_Materia' =>'required|string|max:100',
         'Nombre_Materia' =>'required|string|max:100',
         'plan_estudios'=>'required|string|max:100'
        
       ];
       $Mensaje=["required"=> 'El :attribute es requerido'];
       $this->validate($request,$campos,$Mensaje);
        //$materias=request()->all();
        $materias=request()->except('_token','_method');
        MateriasReprobadas::insert($materias);
        return redirect('MateriasReprobadas')->with('Mensaje','ALumno con materias Reprobadas agregado con exito');

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MateriasReprobadas  $materiasReprobadas
     * @return \Illuminate\Http\Response
     */
    public function show(MateriasReprobadas $materiasReprobadas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MateriasReprobadas  $materiasReprobadas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {// es para que encuentre el registro con el id  y lo muestre al oprimir la opcion editar
        $materias=MateriasReprobadas::findorfail($id);
        return view('MateriasReprobadas.edit',compact('materias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MateriasReprobadas  $materiasReprobadas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {// es para que actualice a cada uno de los campos segun el registro o fila seleccionado 
    // el parametro para decidir es el id.
        $materias=request()->except(['_token','_method']);
        MateriasReprobadas::where('id','=',$id)->update($materias);
       // $materias=MateriasReprobadas::findorfail($id);
       // return view('MateriasReprobadas.edit',compact('materias'));
        return redirect('MateriasReprobadas')->with('Mensaje','Alumno con materias reprobadas modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MateriasReprobadas  $materiasReprobadas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {//funcion que elimina completamente toda la informacion referente a un id o fila 
        // segun le hayamos dado la instruccion.
        $materias=MateriasReprobadas::findorfail($id);
        MateriasReprobadas::destroy($id);
        return redirect('MateriasReprobadas')->with('Mensaje','Alumno con materias reprobadas Eliminado con Exito');
        //
    }
}
