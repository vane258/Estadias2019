<!--Se extiende el diseno del admin a cada una de las vistas esto incluyendo el dashboard 
el cual debe estar en cada una de las vistas--><!DOCTYPE html>
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
h4.left{
  text-align: left;
}
h5.right{
  text-align: right;
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
<h3 class="center">Lista de Asistencias</h3>
</div>
<br>
<br>
<div style="text-align:left" >Nombre Maestro:<b> {{$alumno->Nombre_Maestro}}</b></div>
<div style="text-align:right">Periodo:<b> {{$alumno->Periodo}}</b></div>
<div style="text-align:left">Grupo:<b> {{$alumno->Grupo}}</b></div>
<div style="text-align:right">Nombre Materia:<b> {{$alumno->Nombre_Materia}}</b></div>
<br>
<br>
<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de laa bd en-->
<table  cellspacing="0" cellpadding="8">
  <tr>
   <th>Clave Materia</th>
   <th>Matricula</th>
   <th>Nombre Alumno</th>
   <th>Curso</th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  <th></th>
  
   </tr>
    <!-- ciclo que recorre y ayuda a mostrar todos los registros en la 
  tabla del reporte-->
   @foreach($materias AS $p)
   <tr>
   <td>{{$p->clave_materia}}</td> 
     <td>{{$p->matricula}}</td>
   <td>{{$p->Nombre_alumno}}</td>
   <td>{{$p->curso}}</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   

    </tr>
    @endforeach
   </table>
 
   </body>
   </html>