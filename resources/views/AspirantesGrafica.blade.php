<!--Se extiende el diseno del admin a cada una de las vistas esto incluyendo el dashboard 
el cual debe estar en cada una de las vistas-->
@extends('layouts.app')
@section('content')
<!--es un contenedor tipo wrapper para que tenga movilidad junto con el dashboard
para que al ampliarse se mueva junto con el y evitar que tape el contenido-->
<div class="content-wrapper">

<html>
  <head>
  <!--es el boton que redirecciona a inicio  o mas bien de vuelta a la vista index de este reporte-->
  <a href="{{url('Aspirantes')}}" class="btn btn-success">Inicio</a>
  <!--es un diseno propio de google para la grafica -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        //es donde se "pintan" de alguna manera estas variables que se obtuvieron en 
        //el controlador.

        var data = google.visualization.arrayToDataTable([
          ['Alumno', 'Promedio'],
          // es un ciclo for each para que cada uno de los registros dentro de la tabla que se esta utilizando 
          //aparezcan en la grafica de pastel.
           @foreach($pastel as $pasteles)
           ['{{$pasteles->Nombre_alumno}}',{{$pasteles->prom}}],
           @endforeach
        ]);
// el titulo de la grafica.
        var options = {
          title: 'Promedio De Alumno',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <!-- es el tamano del div dentro del cual " se pinta" la grafica -->
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>

@endsection