<!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->

<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial,san-serif;
  width:100%;
 
  border="2"
  -moz-border-radius: 15px;
padding-left : 5px;
padding-right : 5px;
}
td,th{
  border:1px solid #070707;
  <text-align:center></text-align:center>;
  padding:0px;
}

tr:nth-child(even){
  background-color:#dddddd;
}

h2.center{
  text-align: center;
  
}
h3.left{
  text-align: left;
}

h4.right{
  text-align: right;
}
p.center{
  text-align: center;
}
table {
margin: auto;
}

@page { margin: 200px 60px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT; }
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT;}
    #footer .page:after { content: counter(page, upper-roman); }

</style>
</head>
<!--son los div que van en la cabecera del reporte en formato pdf -->

<div id="header">
<img src="./images/logoG.png" width="80" height="60" align="left">
<img src="./images/logoS.png" width="50" height="35"  align="right">
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h2 class="center">Kardex </h2>
</div>
<div style="text-align:left" >Alumno: <b>{{$alumno->Nombre_alumno}}</b></div>
<div style="text-align:right">Promedio General:<b> {{$alumno->promedio_gral}}</b></div>
<div style="text-align:left">Matricula: <b>{{$alumno->Matricula_alumno}}</b></div>
<div style="text-align:right">Creditos: <b>{{$alumno->creditos}}</b></div>
<div style="text-align:left">Carrera: <b>{{$alumno->carrera}}</b></div>
<div style="text-align:right">Porcentaje de Avance:<b> {{$alumno->porcentaje_avance}} %</b></div>
<div style="text-align:left">Plan Estudios: <b>{{$alumno->plan_estudios}}</b></div>
<div style="text-align:right">Fecha de Impresion: <b>@php echo date("d-m-Y"); @endphp</b></div>

<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de laa bd en-->
   <table  cellspacing="0" cellpadding="8">
  <tr>
   <th>Clave Materia</th>
   <th>Nombre Materia</th>
   <th>Calificacion</th>
   <th>Resultado</th>
   <th>Curso</th>
   <th>Creditos de la Materia</th>
   <th>Periodo</th>
  
   </tr>
   <!-- ciclo que recorre y ayuda a mostrar todos los registros en la 
  tabla del reporte-->
   @foreach($materias AS $a)
   <tr>
   <td>{{$a->id_Materia}}</td>
   <td>{{$a->Nombre_Materia}}</td>
   <td>{{$a->Cal}}</td>
   <td>{{$a->Resultado}}</td>
   <td>{{$a->curso}}</td>
   <td>{{$a->creditos_materia}}</td>
   <td>{{$a->periodo}}</td>
  
    </tr>
    @endforeach
   </table> 
  
   <br>
   
   
   <br>
   
                    <p class="center">ING. ISMAEL ALBERTO PACHECO ZABALETA</P>
                    <p class="center">JEFE DEL DEPARTAMENTO DE SERVICIOS ESCOLARES</P>
<!-- este es el pie de pagina del reporte-->
<div id="footer">
<table width="35%" height="auto">
<tr  style="border:white">
<td  style="border:white"><img src="./images/logo.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoU.png" width="50" height="30"></td>
</tr >
</div>
   </body>
   </html>
 
   