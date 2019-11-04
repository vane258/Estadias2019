<!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte mediante esta tabla-->

<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial,san-serif;
  border:"2";
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
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT;}
    #footer .page:after { content: counter(page, upper-roman); }
table {
margin: auto;
}
</style>
</head>
<!--son los div que van en la cabecera del reporte en formato pdf tabto imagenes como
titulo del reporte -->

<div id="header">
<table width="35%" height="auto">
<tr  style="border:white">
<td  style="border:white"><img src="./images/logoG.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoS.png" width="50" height="30"></td>
</tr >
</table>
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Historial Academico</h3>
</div>
<!--  son parrafos que van conformando el formato del reporte-->

<div style="text-align:left" >Alumno: {{$alumno->Nombre_alumno}}</div>
<div style="text-align:right">Matricula: {{$alumno->Matricula}}</div>
<div style="text-align:left">Carrera: {{$alumno->carrera}}</div>
<div style="text-align:right">Plan Estudios: {{$alumno->plan_estudios}}</div>
<div style="text-align:left">Modalidad: {{$alumno->modalidad}}</div>

<p>
<div style="text-align:right">Promedio General: {{$alumno->Prom_general}}</div>
<div style="text-align:left">Creditos: {{$alumno->creditos}}</div>

</p>
<br>
<br>
<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de laa bd en el reporte-->
<table cellspacing="0" cellpadding="8">
  <tr>
   <th>Cuatrimestre</th>
   <th>Clave de Materia</th>
   <th>Materia</th>
   <th>Calificacion</th>
   <th>Resultado</th>
   <th>Curso</th>
   <th>Creditos</th>
   <th>Modalidad</th>
   </tr>
  <!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->

   @foreach($materias AS $a)
   <tr>
   <td>{{$a->cuatrimestre}}</td>
   <td>{{$a->Clave_Materia}}</td>
   <td>{{$a->Nombre_Materia}}</td>
   <td>{{$a->calificacion}}</td>
   <td>{{$a->resultado}}</td>
   <td>{{$a->curso}}</td>
   <td>{{$a->creditos_materia}}</td>
   <td>{{$a->modalidad}}</td>

    </tr>
    @endforeach
   </table>
  <br>
  <br>
  
<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de laa bd en el reporte-->
   <table cellspacing="0" cellpadding="8">
  <tr>
   <th>Cuatrimestre</th>
   <th>Materias Cursadas</th>
   <th>Materias Aprobadas</th>
   <th>Materias Reprobadas</th>
   <th>Promedio Total</th>
   </tr>
     <!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->

   @foreach($materias AS $a)
   <td>{{$a->Cuat_Actual}}</td>
   <td>{{$a->Mat_cur}}</td>
   <td>{{$a->Mat_apr}}</td>
   <td>{{$a->Mat_rep}}</td>
   <td>{{$a->Prom_cuatri}}</td>
   
  
   </tr>
  
    @endforeach
   </table >
   <!--  es la parte de las firmas en formato del reporte-->
<br>
<br>
   <p style="text-align:center">
   <label for="nombre_alumno" id="nombre_alumno">ING. ISMAEL ALBERTO PACHECO ZABALETA</label>
   <br>
   <label for="nombre_alumno" id="nombre_alumno">JEFE DEL DEPARTAMENTO DE SERVICIOS ESCOLARES</label>

</p>
   <!-- este es el pie de pagina de cada hoja que llegue a formularse del reporte-->

<div id="footer">
<table width="35%" height="auto">
<tr  style="border:white">
<td  style="border:white"><img src="./images/logo.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoU.png" width="50" height="30"></td>
</tr ></table>
</div>
   </body>
   </html>
   <br>
  