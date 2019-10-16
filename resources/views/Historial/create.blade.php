<!--  se extiende el diseno del login o del admin a cada una
de las vistas  -->
@extends('layouts.app')
@section('content')
<!-- es un contenedor tipo wrapper para que tenga movilidad al momento de que se mueva el dashboard
 y no quede arriba del contenido si no que se acomple-->
<div class="content-wrapper">
<div class="card">
<body class="hold-transition login-page" >
<div class="login-box" style="width: 700px; height: 500px;">
  <div class="login-logo" >
  <a href="welcome" style="color:#070707"><b>Formulario para Agregar Alumnos</b></a>
  </div>
  <div class="card-body login-card-body" style="background-color:#800080">
<!-- este if es para que al momento de ingresar un campo en el formulario este no inserta en la bd hasta que 
esten todos completos y manda un msj al momento de que nota que hay un campo faltante eh indica cual es.-->

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
 <ul>
@foreach($errors->all() as $error)
<li> {{$error}}</li>
@endforeach
</ul>
</div>
@endif
<!--es la variable modo la cual se declara especificamente en esta vista para ayudar a indentificar que 
 vista y que accion se esta ejecutando  -->
<form action="{{url('/Historial')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{csrf_field()}}
@include('Historial.form',['Modo'=>'creacionhis'])

</form> 
</div>
<div>
<div>
<div>
@endsection