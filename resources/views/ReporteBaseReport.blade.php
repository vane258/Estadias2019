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
<table width="35%" height="auto">
<tr  style="border:white">
<td  style="border:white"><img src="./images/logoG.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoS.png" width="50" height="30"></td>
</tr >
</table>
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Reporte Base de los Alumnos</h3>
</div>
<br>
<br>
<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de laa bd en-->
<table  cellspacing="0" cellpadding="8">
  <tr>
            <th>Matricula </th>
            <th>Nombre Alumno </th>
            <th>Plan de Estudios</th>
            <th>Carrera</th>
            <th>Campus</th>
            <th>Genero </th>
            <th>generacion</th>
            <th>Edo. Nacimiento</th>
            <th>CURP</th>
            <th>NSS</th>
            <th>Fecha Nacimiento</th>
            <th>Municipio Procedencia</th>
            <th>Edo. Escuela Procedencia</th>
            <th>Escuela de Procedencia</th>
            <th>Edad</th>
           </tr>
            <!-- ciclo que recorre y ayuda a mostrar todos los registros en la 
  tabla del reporte-->
   @foreach($base AS $base1)
<tr>
   <td>{{$loop->iteration}}</td>
        
        <td>{{$base1->Nombre_alumno}}</td>
        <td>{{$base1->plan_estudios}}</td>
        <td>{{$base1->carrera}}</td>
        <td>{{$base1->campus}}</td>
        <td>{{$base1->genero}}</td>
        <td>{{$base1->generacion}}</td>
        <td>{{$base1->edoNacimiento}}</td>
        <td>{{$base1->Curp}}</td>
        <td>{{$base1->nss}}</td>
        <td>{{$base1->f_nac}}</td>
        <td>{{$base1->mc}}</td>
        <td>{{$base1->edescp}}</td>
        <td>{{$base1->escp}}</td>
        <td>{{$base1->edad}}</td>
       
    </tr>
    @endforeach
   </table>
  <!--este es el pie de pagina del reporte-->
   <div id="footer">
   <table width="35%" height="auto">
<tr  style="border:white">
<td  style="border:white"><img src="./images/logo.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoU.png" width="50" height="30"></td>
</tr >
</div>
  
 
   </body>
   </html>