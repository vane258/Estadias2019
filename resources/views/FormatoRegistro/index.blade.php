<!--  se extiende el diseno del login o del admin a cada una
de las vistas  -->

@extends('layouts.app')
@section('content')
<!-- es un contenedor tipo wrapper para que tenga movilidad al momento de que se mueva el dashboard
 y no quede arriba del contenido si no que se acomple-->
<div class=" content-wrapper">
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
            <h4 class="card-title mt-0" style="color:white"> Tabla de aspirantes Formato Registro</h4>
           <!--  este es el input que ayudara a hacer el filtrado y la busqueda en esta vista por nombre
          del alumno-->
            <div class="card-tools">
                  <!--- Aqui esta tu nuevo search :p -->
                  <form action="{{ url('FormatoRegistro') }}" method="GET" class="form:inline pull-right"> 
                  <div class="input-group input-group-sm" style="width: 200px;">

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
            <th>Matricula </th>
            <th>Nombre Alumno</th>
            <th>Fecha de Nacimiento</th>
            <th>Edad</th>
            <th>CURP</th>
            <th>Sexo</th>
            <th>Lugar Nacimiento</th>
            <th>Estado Civil</th>
            <th>Promedio</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Referencias</th>
            <th>Escuela de Procedencia</th>
            <th>Domicilio Escuela</th>
            <th>Area egreso</th>
            <th>periodo</th>
            <th>Programa Academico</th>
            <th> Sede</th>
            <th>Generacion</th>
            <th>Domicilio</th>
            <th>ife</th>
            <th>Anio de Egreso</th>




            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
    <!-- es un ciclo que maneja cada uno de los registros para que todos se muestren en la tabla
     trayendolos de la BD -->
    @foreach($reg as $b1)
        <tr>
        <td>{{$b1->Matricula}}</td>
        <td>{{$b1->Nombre_alumno}}</td>
        <td>{{$b1->f_nac}}</td>
        <td>{{$b1->edad}}</td>
        <td>{{$b1->Curp}}</td>
        <td>{{$b1->sexo}}</td>
        <td>{{$b1->LugarN}}</td>
        <td>{{$b1->estadoC}}</td>
        <td>{{$b1->prom}}</td>
        <td>{{$b1->email}}</td>
        <td>{{$b1->tel}}</td>
        <td>{{$b1->referencias}}</td>
        <td>{{$b1->escp}}</td>
        <td>{{$b1->domesc}}</td>
        <td>{{$b1->area}}</td>
        <td>{{$b1->Periodo}}</td>
        <td>{{$b1->programa}}</td>
        <td>{{$b1->sede}}</td>
       <td>{{$b1->generacion}}</td>
       <td>{{$b1->dom}}</td>
       <td>{{$b1->ife}}</td>
       <td>{{$b1->egreso}}</td>
      



        <!-- es el direccionamiento a las funciones de editar y 
         eliminar del controlador-->

      <td><a class="btn btn-warning" href="{{ url('/FormatoRegistro/'.$b1->id. '/edit')}}">
        Editar</a>   |
        <a href="{{route('reports.FormatoRegistro', ['id' => $b1->Matricula])}}" class="btn btn-primary">Informe</a>

        <form method="post" action="{{url('/FormatoRegistro/'.$b1->id)}}" style="display:inline">
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