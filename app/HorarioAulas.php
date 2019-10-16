<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioAulas extends Model
{
    //funcion de scope que ayuda a el filtrado y la busqueda busca deacuerdo a lo que se introduzca en la 
//vista y muestra las coincidencias que se encuentren dependiendo el campo por el que tu desees buscar.
    protected $fillable=['Nombre_aula'];

    public function scopeNombre_aula($query ,$Nombre_aula){
        if($Nombre_aula)
        return $query->where('Nombre_aula','LIKE',"%$Nombre_aula%");

    }
}
