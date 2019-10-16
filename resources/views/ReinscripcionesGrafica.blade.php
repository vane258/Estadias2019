@extends('layouts.app')

@section('content')
<html>
  <head>
  <a href="{{url('Reinscripciones')}}" class="btn btn-success">Inicio</a>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Alumno', 'carrera'],
           @foreach($pastel as $pasteles)
           ['{{$pasteles->Nombre_alumno}}',{{$pasteles->up}}],
           @endforeach
        ]);

        var options = {
          title: 'Ultimo Promedio de Alumno De Alumno',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>

@endsection