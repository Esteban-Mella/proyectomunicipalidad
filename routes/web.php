<?php

use App\Http\Controllers\tablaEntregaController;/* no utilizado momentaneamente  */
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('entregaEquipos');
});

route::view('/entregaEquipos','entregaEquipos')->name('entregaEquipos');
route::view('/retornoEquipos','retornoEquipos')->name('retornoEquipos');
route::view('/consultaEquipos','consultaEquipos')->name('consultaEquipos');
route::view('/historialEntregas','historialEntregas')->name('historialEntregas');
route::view('/historialRetorno','historialRetorno')->name('historialRetorno');

route::post('/pdf','PDFController@PDF')->name('descargarpdf');
/* route::get('/pdf','PDFController@PDF')->name('descargarpdf'); uso temporal en face de pruebas */

