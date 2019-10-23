<!-- se extiende el estilo de la plantilla del admin a esta vista -->
@extends('layouts.app')
@section('content')
<!-- es un contenedor wrapper para que tenga movilidad junto con el sidebar-->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
        <!--dentro de cada uno de estos div se manda llamar la variable 
        que se declaro y se inicializo en la funcion index del controlador 
        la cual cuenta los registros de cada una de las vistas que ahi se definen -->

    <!-- Small boxes (Stat box) -->
    <div class="row-lg-12 col-lg-12">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$countkardex}}</h3>
            <p>Kardex</p>
          </div>
          <div class="icon">
            <i class="fa fa-university"></i>
          </div>
      </div>
      <!-- ./col -->
 <!-- Content Header (Page header) -->
 <section class="content-header">
    </section>
    <!-- Small boxes (Stat box) -->
    <div class="row-lg-20 col-lg-20">
      <div class="col-lg-20 col-xs-20">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$countAspirantes}}</h3>
            <p>Aspirantes</p>
          </div>
          <div class="icon">
            <i class="fa fa-university"></i>
          </div>
      </div>
      <!-- ./col -->
      <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <!-- Small boxes (Stat box) -->
    <div class="row-lg-20 col-lg-20">
      <div class="col-lg-20 col-xs-20">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$countHistorial}}</h3>
            <p>Historial</p>
          </div>
          <div class="icon">
            <i class="fa fa-university"></i>
          </div>
      </div>
      <!-- ./col -->
    <!-- End stat boxes -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    </section>
    <!-- Small boxes (Stat box) -->
    <div class="row-lg-20 col-lg-20">
      <div class="col-lg-20 col-xs-20">
        <!-- small box -->
        <div class="small-box bg-pink">
          <div class="inner">
            <h3>{{$countCertificado}}</h3>
            <p>Certificado</p>
          </div>
          <div class="icon">
            <i class="fa fa-university"></i>
          </div>
      </div>
      <!-- ./col -->

      <!-- Content Header (Page header) -->
  <section class="content-header">
    </section>
    <!-- Small boxes (Stat box) -->
    <div class="row-lg-20 col-lg-20">
      <div class="col-lg-20 col-xs-20">
        <!-- small box -->
        <div class="small-box bg-purple">
          <div class="inner">
            <h3>{{$countMateriasReprobadas}}</h3>
            <p>Materias Reprobadas</p>
          </div>
          <div class="icon">
            <i class="fa fa-university"></i>
          </div>
      </div>
      <!-- ./col -->
    <!-- End stat boxes -->
 

@endsection