<!--  se extiende el diseno del login o del admin a cada una
de las vistas  -->
@extends('layouts.app')
@section('content')
<!-- es un contenedor tipo wrapper para que tenga movilidad al momento de que se mueva el dashboard
 y no quede arriba del contenido si no que se acomple-->
<div class="container">
<div class=" content-wrapper">
<!-- este es un if mediante el cual se envia el mensaje 
siempre y cuando se haya eliminado, creado o modificado un registro-->
@if(Session::has('Mensaje')){{
 Session::get('Mensaje')
}}
@endif

<br>
<br>
<!-- este es el div que le da estilo a a la tabla de donde se visualizan los datos que se tienen en la bd
 es un content wrapper para que tenga movilidad junto con el dashboard -->
        
<div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary" style="background-color:#800080">
            <h4 class="card-title mt-0"style="color:white"> Tabla de alumnos Constancias</h4>
           <!--  este es el input que ayudara a hacer el filtrado y la busqueda en esta vista por nombre
          del alumno-->
            <div class="card-tools">                 
             <!--- Aqui esta tu nuevo search :p -->
                  <form action="{{ url('constancias') }}" method="GET" class="form:inline pull-right"> 
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <input type="text" name="Nombre_alumno" class="form-control float-right" placeholder="Nombre Materia">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search" value="Buscar"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
          
           <!-- es la tabla donde se cargan los registros o campos que se han insertado y almacenado en 
           la base de datos de este reporte en especifico-->
          
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class=" text-primary">
        <tr>
            <th>Matricula </th>
            <th>Nombre Alumno</th>
            <th>Materias</th>
            <th>Calificaciones</th>
            <th>Fecha</th>
            <th>Carrera</th>
            <th>Ciclo Escolar</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
      <!-- es un ciclo que maneja cada uno de los registros para que todos se muestren en la tabla
     trayendolos de la BD -->
    @foreach($cons as $b1)
        <tr>
        <td>{{$b1->Matricula}}</td>
        <td>{{$b1->Nombre_alumno}}</td>
        <td>{{$b1->Materias}}</td>
        <td>{{$b1->Cal}}</td>
        <td>{{$b1->Fecha}}</td>
        <td>{{$b1->carrera}}</td>
        <td>{{$b1->ciclo}}</td>
        <!-- es el direccionamiento a las funciones de editar y 
         eliminar del controlador-->
      <td><a class="btn btn-warning" href="{{ url('/constancias/'.$b1->id. '/edit')}}">
        Editar</a>   |
        <a href="{{route('reports.constancias', ['id' => $b1->Matricula])}}" class="btn btn-primary">Informe</a>

        <form method="post" action="{{url('/constancias/'.$b1->id)}}" style="display:inline">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" onclick="return confirm('Deseas Borrar?');">Eliminar</button>
        </form>
        
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<!--  es el direccionamiento al informe y para regresar a inicio -->

<a href="{{url('home')}}" class="btn btn-success"  style="background:#800080">Inicio</a>
@endsection