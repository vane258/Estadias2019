<!-- este es el inicio del documento hmtl que le da estilo al reporte -->
<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial,san-serif;
  border-radius: black 10 px;
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
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color:white; text-align: RIGHT;}
    #footer .page:after { content: counter(page, upper-roman); }
</style>
</head>
<body>
<!--son los div que van en la cabecera del reporte en formato pdf -->
<div id="header">
<img src="./images/logoG.png" width="80" height="60" align="left">
<img src="./images/logoS.png" width="50" height="35"  align="right">
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Reporte de Profesores Materias</h3>
</div>
<br>
<br>
<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de la bd en-->
<table  cellspacing="0" cellpadding="8">
  <tr>
   <th>Clave Profesor</th>
   <th>Nombre Profesor</th>
   <th>Plan de Estudios</th>
   <th>Materia</th>
   <th>Capacidad</td>
   <th>Total Alumnos</th>
   <th>Recursamiento</th>
   </tr>
     <!-- ciclo que recorre y ayuda a mostrar todos los registros en la 
  tabla del reporte-->
   @foreach($materias AS $p)
   <tr>
   <td>{{$p->clave_maestro}}</td>
   <td>{{$p->Nombre_maestro}}</td>
   <td>{{$p->plan_estudios}}</td>
   <td>{{$p->Nombre_Materia}}</td>
   <td>{{$p->capacidad}}</td>
   <td>{{$p->Total_alumnos}}</td>
   <td>{{$p->Recursamiento}}</td>
    </tr>
    @endforeach
   </table>
   <br>
   <br>
  <!--este es el pie de pagina del reporte-->
<div id="footer">
<img src="./images/logo.png" width="60" height="40" align="left" >
<img src="./images/logoU.png" width="50" height="30"align="right">
</div>
   <br>
   
   </body>
   </html>