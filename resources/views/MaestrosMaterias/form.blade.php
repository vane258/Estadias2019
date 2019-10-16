 <!--  en este form el cual comparten el edit y create se ponen cada uno de los campos
 que se van a insertar en la bd que son necesarios es el reporte ademas de que al momento
 de querer editar son los mismos campos que se utilizan para esta opcion  -->
 <div class="container">
                    <div class="form-group" style="color:#ffffff" >
                    <label class="control-label" for="Nombre_maestro">{{'Nombre Maestro'}}</label>
                    <input  class="form-control" type="text" name="Nombre_maestro" id="Nombre_maestro" value="{{isset ($maestros->Nombre_maestro)?$maestros->Nombre_maestro:''}}">

                    <div class="form-group" style="color:#ffffff">
                    <label class="control-label" for="nombre_Materia">{{'Nombre Materia'}}</label>
                    <input   class="form-control" type="text" name="Nombre_Materia" id="Nombre_Materia" value="{{isset ($maestros->Nombre_Materia)?$maestros->Nombre_Materia:''}}">
                    </div>
                    </div>
                    <div class="form-group" style="color:#ffffff">
                    <label class="control-label" for="plan_estudios">{{'plan estudios'}}</label>
                    <input  class="form-control"  type="text" name="plan_estudios" id="plan_estudios" value="{{isset ($maestros->plan_estudios)?$maestros->plan_estudios:''}}" >
                    </div>
                    <div class="form-group" style="color:#ffffff">
                    <label class="control-label" for="capacidad">{{'capacidad'}}</label>
                    <input  class="form-control"  type="text" name="capacidad" id="plan_estudios" value="{{isset ($maestros->capacidad)?$maestros->capacidad:''}}" >
                    </div>
                    <div class="form-group" style="color:#ffffff">
                    <label class="control-label" for="Total_alumnos">{{'Total alumnos'}}</label>
                    <input  class="form-control"  type="text" name="Total_alumnos" id="Total_alumnos" value="{{isset ($maestros->Total_alumnos)?$maestros->Total_alumnos:''}}" >
                    </div>
                    <div class="form-group" style="color:#ffffff">
                    <label class="control-label" for="Total_alumnos">{{'Recursamiento'}}</label>
                    <input  class="form-control"  type="text" name="Recursamiento" id="Recursamiento" value="{{isset ($maestros->Recursamiento)?$maestros->Recursamiento:''}}" >
                    </div>
                    <a class="btn btn-primary" href="{{url('home')}}">Regresar</a>
                    <input type="submit" class="btn btn-success " value ="{{$Modo=='creacionmaestros'?'Agregar Maestro':'Modificar maestro'}}">

</div>
</div>
