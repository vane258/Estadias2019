<!-- comienza el doc HTML dentro del cual va el diseno de la vista del reporte -->
<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial,san-serif;
  border-collapse: black 10px;
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
<img src="./images/logo.png" width="120" height="100." >
<h2 class="center"  >Universidad Politecnica de Victoria</h2>
<h3 class="center">Aspirantes A Nuevo Ingreso</h3>
</div>
<!--  son espacios entre la cabecera y la tabla-->

<br>
<br>
<!-- comienza la tabla donde se cargan los registros  desde la bd -->

<table cellspacing="0" cellpadding="8" >
  <tr>
             <th>Matricula </th>
            <th>Nombre Alumno </th>
            <th>Carrera</th>
            <th>Fecha de Nacimiento</th>
            <th>Edad</th>
            <th>Folio Ceneval</th>
            <th>Puntos Ceneval</th>
            <th>Genero</th>
            <th>Estado de Nacimiento</th>
            <th>Telefono</th>
            <th>Municipio Procedencia</th>
            <th>Escuela de Procedencia</th>
            <th>Mpio. Escuela Procedencia</th>
            <th>Estado Bachillerato</th>
            </tr>
<!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->

   @foreach($asp AS $base1)
   <tr>
   
        <td>{{$base1->id}}</td>
        <td>{{$base1->Nombre_alumno}}</td>
        <td>{{$base1->carrera}}</td>
        <td>{{$base1->f_nac}}</td>
        <td>{{$base1->edad}}</td>
        <td>{{$base1->folio_ceneval}}</td>
        <td>{{$base1->pts_ceneval}}</td>
        <td>{{$base1->genero}}</td>
        <td>{{$base1->edoNacimiento}}</td>
        <td>{{$base1->telefono}}</td>
        <td>{{$base1->mpio}}</td>
        <td>{{$base1->escp}}</td>
        <td>{{$base1->mescp}}</td>
        <td>{{$base1->edo}}</td>
        </tr>
    @endforeach
   </table>
   

   </body>
   </html>
  