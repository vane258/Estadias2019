<!-- este archivo html app.blade.php es el archivo que se incluye cada una de las vistas y es de la cual
todas cargar los estilos  -->
<!-- comienza el archivo html-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- Styles -->

    <link href="{{ asset('css/dist/css/adminlte.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dist/css/adminlte.min.css') }}" rel="stylesheet">
  
   

    <link rel="stylesheet" href="{{ asset('/css/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css ') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('/css/plugins/jqvmap/jqvmap.min.css ') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/css/dist/css/adminlte.min.css ') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/css/plugins/daterangepicker/daterangepicker.css ') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('/css/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <!-- CSRF Token -->

  


</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <div id="app">
    <nav class="main-header navbar navbar-expand navbar-blue navbar-dark" style="background-color:#800080">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Menu Principal</a>
      </li>
           
    </ul>
<!-- Right Side Of Navbar -->
<ul class=" navbar-nav mr-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Ingresa</a></li>
                            <br>
                            <li><a href="{{ route('register') }}">Registrate</a></li>
                        @else
                            <li class="dropdown nav-link">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre style='color:white;'>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-link">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>                    </ul>
    <!-- SEARCH FORM -->
    
           
  </nav>
  <!-- /.navbar -->



  <div class="wrapper">
 <!-- Navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#800080">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sistema Reportes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="background-color:#800080">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open" style="background-color:#800080">
            <a href="#" class="nav-link active" style="background-color:#800080">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Menu Principal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
            
             <!-- TIENDAS-->
              <li class="nav-item">
                <a href="/home" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                  Kardex
                  <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/kardex/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar</p>
                            </a>
                            <a href="{{url('/kardex')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar alumnos</p>
                            </a>
                    </li>
                </ul>
              </li>
             <!-- //TIENDAS-->

             <!-- PRODUCTOS -->
              <li class="nav-item">
                <a href="/home" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                  Historial
                  <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/Historial/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/Historial')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Visualizar lista </p>
                            </a>
                    </li>
                </ul>
              </li>
             <!--//PRODUCTOS -->


             <!-- Alumnos Reinscritos -->
             <li class="nav-item">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Alumnos Reinscritos
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/Reinscripciones/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/Reinscripciones')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                            <a href="{{url('/Rei')}}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Grafica ultimo promedio</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //PROVEEDORES -->

 <!-- Aspirantes -->
       <li class="nav-item">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
               Aspirantes
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/Aspirantes/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar aspirante</p>
                            </a>
                            <a href="{{url('/Aspirantes')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                            <a href="{{url('/AspirantesGrafica')}}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Grafica alumno y promedio</p>
                            </a>
                            <a href="{{url('/AspirantesGraficaGenero')}}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>Grafica alumno y ptos. ceneval</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //Aspirantes -->

<!-- Certificado -->
<li class="nav-item">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Certificado
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/Certificado/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/Certificado')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //certificado -->
<!-- Formato Registro -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Formato Registro
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/FormatoRegistro/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/FormatoRegistro')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //Formato Registro -->
             <!-- Lista de Asistencia -->
             <li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Lista Asistencia
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/ListaAsistencia/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar Maestro</p>
                            </a>
                            <a href="{{url('/ListaAsistencia')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //Lista Asistencia -->
<!-- ALumnos Baja-->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Alumnos Baja
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/AlumnosBaja/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/AlumnosBaja')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //Alumnos Baja -->

             <!-- Certificado -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Constancia de estudios
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/constancias/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/constancias')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //CONSTANCIAS -->

             <!-- becas asignadas -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Becas Asignadas
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/BecasAsignadas/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno </p>
                            </a>
                            <a href="{{url('/BecasAsignadas')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //becas -->
            <!-- Horario Profesores -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Horario Profesores
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/HorarioMaestros/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/HorarioMaestros')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //horario maestros-->
            
            <!-- horario aulas -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Horario Aulas
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/HorarioAulas/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar Aula</p>
                            </a>
                            <a href="{{url('/HorarioAulas')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //horario aulas -->
            <!-- Reporte Base -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
            Reporte Base
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/ReporteBase/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/ReporteBase')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //base -->
            <!-- prof-materias -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
           Prof-Materias
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/MaestrosMaterias/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/MaestrosMaterias')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //materiaas -->
<!-- reprobadas -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Materias Reprobadas
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/MateriasReprobadas/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/MateriasReprobadas')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //reprobadas -->
<!-- Candidatos  recu -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Candidatos Recu
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
                    <li class="nav-item">
                         <a href="/CandidatosRecursamiento/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/CandidatosRecursamiento')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //PROVEEDORES -->
<!-- Asignaturas Ofertar -->
<li class="nav-item has-treeview">
             <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
            Asignaturas Ofertar
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
             <ul class="nav nav-treeview">
             <li class="nav-item">
                         <a href="/AsignaturasOfertar/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registrar alumno</p>
                            </a>
                            <a href="{{url('/AsignaturasOfertar')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>visualizar Lista</p>
                            </a>
                    </li>
                </ul>
             </li>
             <!-- //PROVEEDORES -->
            
            <!--ACABA SUBMENU -->
          </li>         
        </ul><!-- ACABA MENU-->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




</div>

@yield('content')   
@endguest

    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/plugins/moment/moment.min.js ') }}"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.js') }}"></script>

</body>
</html>
