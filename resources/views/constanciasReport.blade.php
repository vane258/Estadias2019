<!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->
<!DOCTYPE html>
<html>
<style>
<head>
table{
  font-family:arial;
  border-collapse: black 10 px;
  width:100%;
}
td,th{
  border:1px solid #070707;
  <text-align:center><text-align:center>;
  padding:8px;
}

tr:nth-child(even){
  background-color:#dddddd
}

h2.center{
  text-align: center;
  
}
h5.right{
  text-align: right;
  
}

h4.center{
  text-align: right;
}
h6.center{
  text-align: center;
}

h3.left{
  text-align: left;
}
p.center{
  text-align: center;
}
.cuadrado {
  border:1px solid #070707;
  width:15%;
  height:1;
  padding-top:10%;
  position:left;
  background:white;
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
<td  style="border:white;text-align:right" ><img src="./images/logoG.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoS.png" width="50" height="30"></td>
</tr >
</table>
<h5 class="right"> UPV/DSE/O/.</h5>
<h5 class="right"> Asunto:Constancia de estudios</h5>
<h5 class="right"> Fecha de Impresion: @php echo date("d-m-Y"); @endphp</h5>

</div>
<div>
<h3 class="left"> A QUIEN CORRESPONDA</h3>
<p> El suscrito, Jefe del departamento de Servicios Escolares de la Universidad Politecnica de Victoria, UPV con clave <b>28EPO0001D</b>.</p> 
<div class="cuadrado"></div>
</div>

<p> Que el(la) C.<b>{{$alumno->Nombre_alumno}}</b>,es alumno regular de esta institucion, cursa actualmente el  cuatrimestre del programa academico de <b>{{$alumno->carrera}}</b>, en el periodo comprendido del ciclo escolar <b>{{$alumno->ciclo}}</b> ,
cuyos documentos obran, en el archivo general de esta institucion y en el expediente personal del(a) alumno (a) con numero de matricula:<b>{{$alumno->Matricula}}</b> obteniendo las materias cursadas actualmente por el alumno</p> 

<h6 class="center"> Materias que cursa Actualmente</h6> 
<!-- inicio de la tabla donde se mostraran cada uno de 
los registros de laa bd en-->

<table  cellspacing="0" cellpadding="8">
  <tr>
    
   <th>Matricula</th>
   <th>Materias</th>
   <th>Calificaciones</th>
   <th>Fecha </th>
   </tr>
      <!-- este ciclo recorre toda la  tabla y muestra los regitros en el reporte medinate esta tabla-->

   @foreach($materias AS $c)
   <tr>
   <td>{{$c->id}}</td>
   <td>{{$c->Materias}}</td>
   <td>{{$c->Cal}}</td>
   <td>{{$c->Fecha}}</td>
    </tr>
    @endforeach
   </table>
   <p>Se extiende la presente a peticion de parte interesada para los usos legales
   que a la misma convengan,en Ciudad Victoria,Tamaulipas</p> 

   <h6 class="center"> ATENTAMENTE</h6> 
   <BR>
   <BR>
   <BR>
   <h6 class="center"> LIC. LEYDY VIRIDIANA RICO ORTIZ</h6> 
   <h6 class="center"> JEFA DEL DEPARTAMENTO DE SERVICIOS ESCOLARES</h6> 
 
 
   <!-- este es el pie de pagina de cada hoja que llegue a formularse del reporte-->

   <div id="footer">
   <table width="35%" height="auto">
<tr  style="border:white">
<td  style="border:white"><img src="./images/logo.png" width="60" height="40" ></td>
<td  style="border:white"><img src="./images/logoU.png" width="50" height="30"></td>
</tr >
</table>
</div>

   </body>
   </html>
   