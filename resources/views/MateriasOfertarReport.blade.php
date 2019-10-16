<!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->

<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial,san-serif;
  border-collapse: black 10 px;
  width:100%;
}
td,th{
  border:1px solid #070707;
  <text-align:center></text-align:center>;
  padding:8px;
}

tr:nth-child(even){
  background-color:#dddddd;
}

h2.center{
  text-align: center;
  
}
h3.center{
  text-align: center;
}


table {
margin: auto;
}
@page { margin: 200px 60px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT; }

</style>
</head>

<!--son los div que van en la cabecera del reporte en formato pdf -->

<div id="header">
<img src="./images/logo.png" width="150" height="100" >
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Materias  ofertar</h3>
</div>
<div >Materia:</div>
<div >Cuatrimestre:</div>
<br>
<br>

<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de laa bd en-->
<table  cellspacing="0" cellpadding="8">
  <tr>
   <th>Matricula</th>
   <th>Nombre Alumno</th>
   <th>Generacion</th>
   <th>Plan de Estudios</th>
   <th>Sede</th>
   <th>Cursando Cuatrimestre</th>
   </tr>
    <!-- ciclo que recorre y ayuda a mostrar todos los registros en la 
  tabla del reporte-->
   @foreach($ofertar AS $c)
   <tr>
   <td>{{$c->id}}</td>
   <td>{{$c->Nombre_alumno}}</td>
   <td>{{$c->Generacion}}</td>
   <td>{{$c->plan_estudios}}</td>
   <td>{{$c->sede}}</td>
   <td>{{$c->cursando_cuatrimestre}}</td>
 
    </tr>
    @endforeach
   </table>
   

   </body>
   </html>