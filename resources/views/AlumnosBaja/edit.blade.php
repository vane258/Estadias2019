<!--  se extiende el diseno del login o del admin a cada una
de las vistas  -->

@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('content')
<!-- es un contenedor tipo wrapper para que tenga movilidad al momento de que se mueva el dashboard
 y no quede arriba del contenido si no que se acomple-->

<div class="content-wrapper">
<div class="card">
<body class="hold-transition login-page" >
<div class="login-box" style="width: 700px; height: 500px;">
  <div class="login-logo" >
  <a href="welcome"><b>Formulario para Editar alumnos</b></a>
  </div>
    <div class="card-body login-card-body" style="background-color:#800080">
   <!--es la variable modo la cual se declara especificamente en esta vista para ayudar a indentificar que 
 vista y que accion se esta ejecutando  -->

<form action="{{url('/AlumnosBaja/' .$baja->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('AlumnosBaja.form',['Modo'=>'edicionalumnos'])
</form>

</div>
</div>
</div>
</div>



@endsection