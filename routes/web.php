<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('Hi/{id}','HistorialAcademicoReportController@generar')->where('id', '[0-9]+')->name("reports.Historial");
Route::get('Ce','CertificadoReportController@generar');
Route::get('Fo','FormatoRegistroReportController@generar');
Route::get('Lo','ListaAsistenciaReportController@generar');
Route::get('As','AspirantesReportController@generar');
Route::get('pdf','ReportController@generar');
Route::get('Ab','AlumnosBajaPDFController@generar');
Route::get('cr','CandidatosRecursamientoPDFController@generar');
Route::get('mo','MateriasOfertarPDFController@generar');
Route::get('ka/{id}','kardexReportController@generar')->where('id', '[0-9]+')->name("reports.kardex");
Route::get('pdf1','ReportMaestrosController@generar');
Route::get('Ba','BecasAsignadasPDFController@generar');
Route::get('Rb','ReporteBasePDFController@generar');
Route::get('Ha','HorarioAulasPDFController@generar');
Route::get('Hm','HorarioMaestrosPDFController@generar');
Route::get('Mr','MateriasReprobadasPDFController@generar');
Route::get('R','ReinscripcionesPDFController@generar');
Route::get('Rei','ReinscripcionesGraficaController@index');

Route::get('co','constanciasReportController@generar');



Route::get('/FormatoRegistro','FormatoRegistroController@index')->name('formato');
Route::get('/FormatoRegistro/create','FormatoRegistroController@create');

Route::get('/Historial','HistorialController@index');
Route::get('/Historial/create','HistorialController@create');


Route::get('/constancias','constanciasController@index');
Route::get('/constancias/create','constanciasController@create');


Route::get('/kardex','kardexController@index');
Route::get('/kardex/create','kardexController@create');

Route::get('/ListaAsistencia','ListaAsistenciaController@index');
Route::get('/ListaAsistencia/create','ListaAsistenciaController@create');

Route::get('/ReporteBase','ReporteBaseController@index');
Route::get('/ReporteBase/create','ReporteBaseController@create');

Route::get('/MateriasReprobadas','MateriasReprobadasController@index');
Route::get('/MateriasReprobadas/create','MateriasReprobadasController@create');

Route::get('/MaestrosMaterias','MaestrosMateriasController@index');
Route::get('/MaestrosMaterias/create','MaestrosMateriasController@create');

Route::get('/CandidatosRecursamiento','CandidatosRecursamientoController@index');
Route::get('/CandidatosRecursamiento/create','CandidatosRecursamientoController@create');

Route::get('/AsignaturasOfertar','AsignaturasOfertar@index');
Route::get('/AsignaturasOfertar/create','AsignaturasOfertarController@create');

Route::get('/AlumnosBaja','AlumnosBajaController@index');
Route::get('/AlumnosBaja/create','AlumnosBajaController@create');


Route::get('/Certificado','CertificadoController@index');
Route::get('/Certificado/create','CertificadoController@create');

Route::get('/BecasAsignadas','BecasAsignadasController@index');
Route::get('/BecasAsignadas/create','BecasAsignadasController@create');

Route::get('/HorarioAulas','HorarioAulasController@index');
Route::get('/HorarioAulas/create','HorarioAulasController@create');

Route::get('/HorarioMaestros','HorarioMaestrosController@index');
Route::get('/HorarioMaestros/create','HorarioMaestrosController@create');

Route::get('/Reinscripciones','ReinscripcionesController@index');
Route::get('/Reinscripciones/create','ReinscripcionesController@create');

Route::get('/Aspirantes','AspirantesController@index');
Route::get('/Aspirantes/create','AspirantesController@create');

Route::get('/AspirantesGraficaGenero','AspirantesGraficaGeneroController@index');
Route::get('/AspirantesGrafica','AspirantesGraficaController@index');
Route::get('/ReinscripcionesGrafica','ReinscripcionesGraficaController@index');




Route::resource('FormatoRegistro','FormatoRegistroController');
Route::resource('Certificado','CertificadoController');
Route::resource('Historial','HistorialController');
Route::resource('ListaAsistencia','ListaAsistenciaController');
Route::resource('constancias','constanciasController');
Route::resource('Reinscripciones','ReinscripcionesController');
Route::resource('Aspirantes','AspirantesController');
Route::resource('HorarioMaestros','HorarioMaestrosController');
Route::resource('HorarioAulas','HorarioAulasController');
Route::resource('AlumnosBaja','AlumnosBajaController');
Route::resource('AsignaturasOfertar','AsignaturasOfertarController');
Route::resource('CandidatosRecursamiento','CandidatosRecursamientoController');
Route::resource('MaestrosMaterias','MaestrosMateriasController');
Route::resource('MateriasReprobadas','MateriasReprobadasController');
Route::resource('BecasAsignadas','BecasAsignadasController');
Route::resource('kardex','kardexController');
Route::resource('ReporteBase','ReporteBaseController');
Auth::routes(['reset'=>false]);


