<?php

use App\Http\Controllers\Personal\LegajoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

// Personal
Route::get('/personal/legajos', [LegajoController::class, 'index'])->name('personal.legajos');
Route::get('/personal/contratos', fn () => Inertia::render('Personal/Contratos'))->name('personal.contratos');
Route::get('/personal/listados', fn () => Inertia::render('Personal/Listados'))->name('personal.listados');

// Consultas
Route::get('/consultas/autoridades', fn () => Inertia::render('Consultas/Autoridades'))->name('consultas.autoridades');
Route::get('/consultas/nomina-personal', fn () => Inertia::render('Consultas/NominaPersonal'))->name('consultas.nomina-personal');
Route::get('/consultas/agentes-secretarias', fn () => Inertia::render('Consultas/AgentesSecretarias'))->name('consultas.agentes-secretarias');
Route::get('/consultas/personal-remuneraciones', fn () => Inertia::render('Consultas/PersonalRemuneraciones'))->name('consultas.personal-remuneraciones');
Route::get('/consultas/agentes-rama-completa', fn () => Inertia::render('Consultas/AgentesRamaCompleta'))->name('consultas.agentes-rama-completa');
Route::get('/consultas/agentes-dependencia', fn () => Inertia::render('Consultas/AgentesDependencia'))->name('consultas.agentes-dependencia');
Route::get('/consultas/antiguedad', fn () => Inertia::render('Consultas/Antiguedad'))->name('consultas.antiguedad');
Route::get('/consultas/concurso', fn () => Inertia::render('Consultas/Concurso'))->name('consultas.concurso');
Route::get('/consultas/contratos-continuidad', fn () => Inertia::render('Consultas/ContratosContinuidad'))->name('consultas.contratos-continuidad');
Route::get('/consultas/diferencias-subrogancia', fn () => Inertia::render('Consultas/DiferenciasSubrogancia'))->name('consultas.diferencias-subrogancia');
Route::get('/consultas/sanciones', fn () => Inertia::render('Consultas/Sanciones'))->name('consultas.sanciones');
Route::get('/consultas/relaciones-agente', fn () => Inertia::render('Consultas/RelacionesAgente'))->name('consultas.relaciones-agente');
Route::get('/consultas/busca-titular', fn () => Inertia::render('Consultas/BuscaTitular'))->name('consultas.busca-titular');
Route::get('/consultas/relacion-2-agentes', fn () => Inertia::render('Consultas/Relacion2Agentes'))->name('consultas.relacion-2-agentes');
Route::get('/consultas/art', fn () => Inertia::render('Consultas/Art'))->name('consultas.art');
Route::get('/consultas/funciones', fn () => Inertia::render('Consultas/Funciones'))->name('consultas.funciones');
Route::get('/consultas/educacion', fn () => Inertia::render('Consultas/Educacion'))->name('consultas.educacion');
Route::get('/consultas/domicilio-mail-tel', fn () => Inertia::render('Consultas/DomicilioMailTel'))->name('consultas.domicilio-mail-tel');
Route::get('/consultas/jubilar', fn () => Inertia::render('Consultas/Jubilar'))->name('consultas.jubilar');

// Novedades Varias
Route::get('/novedades-varias/auditoria', fn () => Inertia::render('NovedadesVarias/Auditoria'))->name('novedades-varias.auditoria');
Route::get('/novedades-varias/tipo-novedad', fn () => Inertia::render('NovedadesVarias/TipoNovedad'))->name('novedades-varias.tipo-novedad');
Route::get('/novedades-varias/temporales', fn () => Inertia::render('NovedadesVarias/Temporales'))->name('novedades-varias.temporales');
Route::get('/novedades-varias/ultimas-secretaria', fn () => Inertia::render('NovedadesVarias/UltimasSecretaria'))->name('novedades-varias.ultimas-secretaria');
Route::get('/novedades-varias/dias-secretarias', fn () => Inertia::render('NovedadesVarias/DiasSecretarias'))->name('novedades-varias.dias-secretarias');
Route::get('/novedades-varias/dias-dni', fn () => Inertia::render('NovedadesVarias/DiasDni'))->name('novedades-varias.dias-dni');
Route::get('/novedades-varias/altas-bajas', fn () => Inertia::render('NovedadesVarias/AltasBajas'))->name('novedades-varias.altas-bajas');
Route::get('/novedades-varias/inasistencias', fn () => Inertia::render('NovedadesVarias/Inasistencias'))->name('novedades-varias.inasistencias');
Route::get('/novedades-varias/ingresos-secretarias', fn () => Inertia::render('NovedadesVarias/IngresosSecretarias'))->name('novedades-varias.ingresos-secretarias');

// Escala
Route::get('/escala/escala-adicionales', fn () => Inertia::render('Escala/EscalaAdicionales'))->name('escala.escala-adicionales');
Route::get('/escala/parametros', fn () => Inertia::render('Escala/Parametros'))->name('escala.parametros');

// Parámetros
Route::get('/parametros/ambitos', fn () => Inertia::render('Parametros/Ambitos'))->name('parametros.ambitos');
Route::get('/parametros/jurisdicciones', fn () => Inertia::render('Parametros/Jurisdicciones'))->name('parametros.jurisdicciones');
Route::get('/parametros/organismos-emisores', fn () => Inertia::render('Parametros/OrganismosEmisores'))->name('parametros.organismos-emisores');
Route::get('/parametros/tipos-titulo', fn () => Inertia::render('Parametros/TiposTitulo'))->name('parametros.tipos-titulo');
Route::get('/parametros/carreras-titulos', fn () => Inertia::render('Parametros/CarrerasTitulos'))->name('parametros.carreras-titulos');
Route::get('/parametros/tipos-relacion', fn () => Inertia::render('Parametros/TiposRelacion'))->name('parametros.tipos-relacion');
Route::get('/parametros/tipos-seguros', fn () => Inertia::render('Parametros/TiposSeguros'))->name('parametros.tipos-seguros');
Route::get('/parametros/per-neike', fn () => Inertia::render('Parametros/PerNeike'))->name('parametros.per-neike');
Route::get('/parametros/funciones', fn () => Inertia::render('Parametros/Funciones'))->name('parametros.funciones');
Route::get('/parametros/tipos-novedad', fn () => Inertia::render('Parametros/TiposNovedad'))->name('parametros.tipos-novedad');
Route::get('/parametros/tipos-licencia', fn () => Inertia::render('Parametros/TiposLicencia'))->name('parametros.tipos-licencia');
Route::get('/parametros/empresas', fn () => Inertia::render('Parametros/Empresas'))->name('parametros.empresas');
Route::get('/parametros/causa-egreso', fn () => Inertia::render('Parametros/CausaEgreso'))->name('parametros.causa-egreso');
Route::get('/parametros/sanciones', fn () => Inertia::render('Parametros/Sanciones'))->name('parametros.sanciones');
Route::get('/parametros/situacion-revista', fn () => Inertia::render('Parametros/SituacionRevista'))->name('parametros.situacion-revista');

// Digitalización
Route::get('/digitalizacion/digitalizacion', fn () => Inertia::render('Digitalizacion/Digitalizacion'))->name('digitalizacion.digitalizacion');
Route::get('/digitalizacion/seguros', fn () => Inertia::render('Digitalizacion/Seguros'))->name('digitalizacion.seguros');
Route::get('/digitalizacion/estadisticas', fn () => Inertia::render('Digitalizacion/Estadisticas'))->name('digitalizacion.estadisticas');
Route::get('/digitalizacion/parametros', fn () => Inertia::render('Digitalizacion/Parametros'))->name('digitalizacion.parametros');

// Documentaciones
Route::get('/documentaciones/trabajar', fn () => Inertia::render('Documentaciones/Trabajar'))->name('documentaciones.trabajar');
Route::get('/documentaciones/temas', fn () => Inertia::render('Documentaciones/Temas'))->name('documentaciones.temas');
Route::get('/documentaciones/subtemas', fn () => Inertia::render('Documentaciones/Subtemas'))->name('documentaciones.subtemas');
Route::get('/documentaciones/listados', fn () => Inertia::render('Documentaciones/Listados'))->name('documentaciones.listados');
