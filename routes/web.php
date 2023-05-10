<?php

use App\Http\Controllers\equiposController;
use App\Http\Controllers\historialEntregaController;
use App\Http\Controllers\historialRetornos;
use App\Http\Controllers\consultaActivoFijo;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/entregaEquipos');
});

/* controladores para manejo de archivos */
route::any('/pdf','PDFController@PDF')->name('descargarpdf');
route::any('/pdfview','PDFController@PDFPreview')->name('previewPDF');
route::any('/previewPDFActivofijo','consultaActivoFijo@previewPDFActivofijo')->name('previewPDFActivofijo');


/* controladores para inicio de vistas */
route::get('/consultaEquipos',[equiposController::class,'equiposDisponibles'])->name('consultaEquipos');
route::get('/historialRetorno',[historialRetornos::class,'obtenerEquiposHistorial'])->name('historialRetorno');
route::get('/historialEntregas',[historialEntregaController::class,'obtenerEquiposHistorial'])->name('historialEntregas');
route::get('/entregaEquipos',[equiposController::class,'recuperarEquiposentrega'])->name('entregaEquipos');
route::get('/consultaActivoFijo',[consultaActivoFijo::class,'consultaActivoFijo'])->name('consultaActivoFijo');

/* controladores de busqueda en bd */

route::post('/equiposBusqueda',[equiposController::class,'equiposBusqueda'])->name('equiposBusqueda');
route::post('/busquedaPorEstado',[equiposController::class,'busquedaPorEstado'])->name('busquedaPorEstado');
route::post('/busquedaHistorialEntregas',[historialEntregaController::class,'busquedaHistorialEntregas'])->name('busquedaHistorialEntregas');
route::post('/busquedaHistorialRetorno',[historialRetornos::class,'busquedaHistorialRetorno'])->name('busquedaHistorialRetorno');
route::post('/historialActivoFijo',[consultaActivoFijo::class,'historialActivoFijo'])->name('historialActivoFijo');
route::get('/retornoEquipos',[equiposController::class,'recuperarEquiposretorno'])->name('retornoEquipos');





