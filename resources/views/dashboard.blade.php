@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
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

 

@endsection