<!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->

<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial,san-serif;
  border-collapse:black 10 px;
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
@page { margin: 200px 60px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT; }


table {
margin: auto;
}
</style>
</head>
<!--son los div que van en la cabecera del reporte en formato pdf -->
<div id="header">
<img src="./images/logo.png" width="150" height="100" >
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Reporte de Materias Reprobadas</h3>
</div>
<br>
<br>
<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de laa bd en-->
<table  cellspacing="0" cellpadding="8">
  <tr>
            <th>Matricula </th>
            <th>Nombre Alumno </th>
            <th>Clave Materia</th>
            <th>Nombre Materia</th>
            <th>Plan de Estudios</th>
            </tr>
<!-- ciclo que recorre y ayuda a mostrar todos los registros en la 
  tabla del reporte-->
   @foreach($materias AS $m1)
<tr>
        <td>{{$m1->Matricula}}</td>
        <td>{{$m1->Nombre_alumno}}</td>
        <td>{{$m1->clave_Materia}}</td>
        <td>{{$m1->Nombre_Materia}}</td>
        <td>{{$m1->plan_estudios}}</td>
    
    </tr>
    @endforeach
   </table>
   
   </body>
   </html>