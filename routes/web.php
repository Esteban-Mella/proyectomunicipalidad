<?php

use Illuminate\Support\Facades\Route;

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
    return view('entregaEquipos');
});

route::view('/entregaEquipos','entregaEquipos')->name('entregaEquipos');
route::view('/retornoEquipos','retornoEquipos')->name('retornoEquipos');
route::view('/consultaEquipos','consultaEquipos')->name('consultaEquipos');
route::view('/historialEntregas','historialEntregas')->name('historialEntregas');
route::view('/historialRetorno','historialRetorno')->name('historialRetorno');

route::get('/pdf','PDFController@PDF')->name('descargarpdf');

