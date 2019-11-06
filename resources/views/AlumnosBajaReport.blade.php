<!-- comienza el doc HTML dentro del cual va el diseno de la vista del reporte -->
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
  border:1px solid #070707
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
<img src="./images/logo.png" width="120" height="100." >
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Alumnos Con Baja</h3>
</div>
<!--  son espacios entre la cabecera y la tabla-->
<br>
<br>
<!-- comienza la tabla donde se cargan los registros  desde la bd -->
<table  cellspacing="0" cellpadding="8">
  <tr>
   <th>Matricula</th>
   <th>Nombre Alumno</th>
   <th>Fecha</th>
   <th>Estatus</th>
   <th>Motivo</th>
   <th>Anotaciones</th>
   </tr>
  <!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->
   @foreach($materias AS $p)
   <tr>
   <td>{{$p->Matricula}}</td>
   <td>{{$p->Nombre_alumno}}</td>
   <td>{{$p->fecha}}</td>
   <td>{{$p->Estatus}}</td>
   <td>{{$p->Motivo}}</td>
   <td>{{$p->Anotaciones}}</td>
    </tr>
    @endforeach
   </table>
   
   </body>
   </html>
 