<?php

use App\Http\Controllers\equiposController;
use App\Http\Controllers\historialEntregaController;
use App\Http\Controllers\historialRetornos;
use App\Http\Controllers\descargaPDFController;
use App\Http\Controllers\consultaActivoFijo;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('entregaEquipos');
});

/* route::view('/entregaEquipos','entregaEquipos')->name('entregaEquipos'); */
/* route::view('/retornoEquipos','retornoEquipos')->name('retornoEquipos'); */
/* route::view('/consultaEquipos','consultaEquipos')->name('consultaEquipos'); */
/* route::view('/historialEntregas','historialEntregas')->name('historialEntregas'); */
/* route::view('/historialRetorno','historialRetorno')->name('historialRetorno'); */

route::any('/pdf','PDFController@PDF')->name('descargarpdf');
route::any('/pdfview','PDFController@PDFPreview')->name('previewPDF');
route::any('/previewPDFActivofijo','consultaActivoFijo@previewPDFActivofijo')->name('previewPDFActivofijo');


route::get('/consultaEquipos',[equiposController::class,'equiposDisponibles'])->name('consultaEquipos');


route::get('/historialRetorno',[historialRetornos::class,'obtenerEquiposHistorial'])->name('historialRetorno');
route::get('/historialEntregas',[historialEntregaController::class,'obtenerEquiposHistorial'])->name('historialEntregas');
route::get('/entregaEquipos',[equiposController::class,'recuperarEquiposentrega'])->name('entregaEquipos');
route::get('/consultaActivoFijo',[consultaActivoFijo::class,'consultaActivoFijo'])->name('consultaActivoFijo');

/* controladores de busqueda */

route::post('/equiposBusqueda',[equiposController::class,'equiposBusqueda'])->name('equiposBusqueda');
route::post('/busquedaPorEstado',[equiposController::class,'busquedaPorEstado'])->name('busquedaPorEstado');
route::post('/busquedaHistorialEntregas',[historialEntregaController::class,'busquedaHistorialEntregas'])->name('busquedaHistorialEntregas');
route::post('/busquedaHistorialRetorno',[historialRetornos::class,'busquedaHistorialRetorno'])->name('busquedaHistorialRetorno');
route::post('/historialActivoFijo',[consultaActivoFijo::class,'historialActivoFijo'])->name('historialActivoFijo');

route::get('/retornoEquipos',[equiposController::class,'recuperarEquiposretorno'])->name('retornoEquipos');

/* route::get('/pdf','PDFController@PDF')->name('descargarpdf'); uso temporal en face de pruebas */

Route::get('pdf/{file}', [descargaPDFController::class, 'descarga'])->name('descargaPDF');

