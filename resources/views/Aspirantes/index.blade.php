<!--  se extiende el diseno del login o del admin a cada una
de las vistas  -->

@extends('layouts.app')
@section('content')
<!-- es un contenedor tipo wrapper para que tenga movilidad al momento de que se mueva el dashboard
 y no quede arriba del contenido si no que se acomple-->
<div class="content-wrapper">
<div class="container">
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
            <h4 class="card-title mt-0" style="background-color:#ffffff"> Tabla de Aspirantes</h4>
           <!--  este es el input que ayudara a hacer el filtrado y la busqueda en esta vista por nombre
          del alumno-->
            <div class="card-tools">                 
             <!--- Aqui esta tu nuevo search :p -->
                  <form action="{{ url('Aspirantes') }}" method="GET" class="form:inline pull-right" > 
                  <div class="input-group input-group-sm" style="width: 200px;">
                  <input type="text" name="Nombre_alumno" class="form-control float-right" placeholder="Nombre alumno">

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
           
            <th>Matricula </th>
            <th>Nombre Alumno </th>
            <th>Carrera</th>
            <th>Fecha de Nacimiento</th>
            <th>Edad</th>
            <th>Folio Ceneval</th>
            <th>Puntos Ceneval</th>
            <th>Genero</th>
            <th>Estado de Nacimiento</th>
            <th>Telefono</th>
            <th>Municipio Procedencia</th>
            <th>Escuela de Procedencia</th>
            <th>Mpio. Escuela Procedencia</th>
            <th>Estado Bachillerato</th>
            <th>Promedio</th>
            <th>Area de Egreso</th>
            <th>Email</th>
            <th>Sede</th>
            <th>Fecha de Examen</th>
            <th>Resultados</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
     <!-- es un ciclo que maneja cada uno de los registros para que todos se muestren en la tabla
     trayendolos de la BD -->
    @foreach($aspirante AS $base1)
        <tr>
        <td>{{$base1->Matricula}}</td>
        <td>{{$base1->Nombre_alumno}}</td>
        <td>{{$base1->carrera}}</td>
        <td>{{$base1->f_nac}}</td>
        <td>{{$base1->edad}}</td>
        <td>{{$base1->folio_ceneval}}</td>
        <td>{{$base1->pts_ceneval}}</td>
        <td>{{$base1->genero}}</td>
        <td>{{$base1->edoNacimiento}}</td>
        <td>{{$base1->telefono}}</td>
        <td>{{$base1->mpio}}</td>
        <td>{{$base1->escp}}</td>
        <td>{{$base1->mescp}}</td>
        <td>{{$base1->edo}}</td>
        <td>{{$base1->prom}}</td>
        <td>{{$base1->area}}</td>
        <td>{{$base1->email}}</td>
        <td>{{$base1->sede}}</td>
        <td>{{$base1->fexamen}}</td>
        <td>{{$base1->resultados}}</td>
        <!-- es el direccionamiento a las funciones de editar y 
         eliminar del controlador-->
        <td><a class="btn btn-warning" href="{{ url('/Aspirantes/'.$base1->id.'/edit')}}">
        Editar</a>   |
        <a href="{{route('reports.Aspirantes', ['id' => $base1->Matricula])}}" class="btn btn-primary">Informe</a>

        <form method="post" action="{{url('/Aspirantes/'.$base1->id)}}" style="display:inline">
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
</div>
</div>
</div>
<!--  es el direccionamiento al informe y para regresar a inicio -->

<a href="{{url('home')}}" class="btn btn-success" style="background:#800080">Inicio</a>
@endsection