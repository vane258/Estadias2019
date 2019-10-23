@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
      </h1>
      <ol class="breadcrumb">
        <li><a href="/dashboard"><i class="fa fa-dashboard"></i> dashboard</a></li>
      </ol>
    </section>

    <br><br>
    <!-- Small boxes (Stat box) -->
    <div class="row-lg-12 col-lg-12">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$countkardex}}</h3>

            <p>Kardex</p>
          </div>
          <div class="icon">
            <i class="fa fa-university"></i>
          </div>
      </div>

      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$countHistorial}}<sup style="font-size: 20px"></sup></h3>

            <p>Historial</p>
          </div>
          <div class="icon">
            <i class="fa fa-book"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$countAspirantes}}</h3>

            <p>Aspirantes</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
      </div>
      
      
      
    <!-- End stat boxes -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>   

@endsection
