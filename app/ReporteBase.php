<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteBase extends Model
{
    //funcion de scope que ayuda a el filtrado y la busqueda busca deacuerdo a lo que se introduzca en la 
//vista y muestra las coincidencias que se encuentren dependiendo el campo por el que tu desees buscar.
    protected $fillable=['Nombre_alumno'];

    public function scopeNombre_alumno($query ,$Nombre_alumno){
        if($Nombre_alumno)
        return $query->where('Nombre_alumno','LIKE',"%$Nombre_alumno%");

    }
}
