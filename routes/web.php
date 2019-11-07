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
Route::get('Ce/{id}','CertificadoReportController@generar')->where('id', '[0-9]+')->name("reports.Certificado");
Route::get('Fo/{id}','FormatoRegistroReportController@generar')->where('id', '[0-9]+')->name("reports.FormatoRegistro");
Route::get('Lo/{id}','ListaAsistenciaReportController@generar')->where('id', '[0-9]+')->name("reports.ListaAsistencia");
Route::get('As/{id}','AspirantesReportController@generar')->where('id', '[0-9]+')->name("reports.Aspirantes");
Route::get('Ab/{id}','AlumnosBajaPDFController@generar')->where('id', '[0-9]+')->name("reports.AlumnosBaja");
Route::get('cr/{id}','CandidatosRecursamientoPDFController@generar')->where('id', '[0-9]+')->name("reports.CandidatosRecursamiento");
Route::get('mo/{id}','MateriasOfertarPDFController@generar')->where('id', '[0-9]+')->name("reports.MateriasOfertar");
Route::get('ka/{id}','kardexReportController@generar')->where('id', '[0-9]+')->name("reports.kardex");
Route::get('pdf1/{id}','ReportMaestrosController@generar')->where('id', '[0-9]+')->name("reports.ReportMaestros");
Route::get('Ba/{id}','BecasAsignadasPDFController@generar')->where('id', '[0-9]+')->name("reports.BecasAsignadas");
Route::get('Rb/{id}','ReporteBasePDFController@generar')->where('id', '[0-9]+')->name("reports.ReporteBase");
Route::get('Ha/{id}','HorarioAulasPDFController@generar')->where('id', '[0-9]+')->name("reports.HorarioAulas");
Route::get('Hm/{id}','HorarioMaestrosPDFController@generar')->where('id', '[0-9]+')->name("reports.HorarioMaestros");
Route::get('Mr/{id}','MateriasReprobadasPDFController@generar')->where('id', '[0-9]+')->name("reports.MateriasReprobadas");
Route::get('R/{id}','ReinscripcionesPDFController@generar')->where('id', '[0-9]+')->name("reports.Reinscripciones");
Route::get('Rei','ReinscripcionesGraficaController@index');

Route::get('co/{id}','constanciasReportController@generar')->where('id', '[0-9]+')->name("reports.constancias");



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


