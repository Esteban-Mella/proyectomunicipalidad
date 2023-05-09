<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\historialentregas;
use App\historialrecepcion;
use App\updateEquipos;


class PDFController extends Controller
{
    public function PDF(Request $request){
        $datosTabla = $request->input('datos');
        $informacion = $request->input('informacion');
        $nroInventario = '';
        $nro_activo_fijo = '';
        $nro_serie = '';
        $nombre_equipo = '';
        $marca_equipo= '';


        $nombreArchivo ='pdf-'.$informacion[1].'-'.date("d M j G-i-s T Y").'.pdf';
        $pdf = PDF::loadView('pdf.PDFEntregaEquipos', ['datosTabla' => $datosTabla], ['informacion' => $informacion]);
        $updateEquipos = new updateEquipos;
        foreach($datosTabla as $fila){

            $nroInventario.=','.$fila[1];
            $nro_activo_fijo.=','.$fila[2];
            $nro_serie.=','.$fila[3];
            $nombre_equipo.=','.$fila[4];
            $marca_equipo.=','.$fila[5];

            $updateEquipos->where('id', $fila[0])
            ->update(['asignado' => $informacion[0]]);
        }

        if ($informacion[1]==='Entrega') {
            Storage::disk('cargaEntrega')->put($nombreArchivo, $pdf->output());

            $historialentregas = new historialentregas;

            $historialentregas->nro_inventario = $nroInventario;
            $historialentregas->nro_activo_fijo = $nro_activo_fijo;
            $historialentregas->nro_serie = $nro_serie;
            $historialentregas->nombre_equipo = $nombre_equipo;
            $historialentregas->marca_equipo = $marca_equipo;
            $historialentregas->asignado = $informacion[0];
            $historialentregas->ruta_pdf = $nombreArchivo;

            $historialentregas->save();
        } else {

            Storage::disk('cargaRetorno')->put($nombreArchivo, $pdf->output());

            $historialrecepcion = new historialrecepcion;

            $historialrecepcion->nro_inventario = $nroInventario;
            $historialrecepcion->nro_activo_fijo = $nro_activo_fijo;
            $historialrecepcion->nro_serie = $nro_serie;
            $historialrecepcion->nombre_equipo = $nombre_equipo;
            $historialrecepcion->marca_equipo = $marca_equipo;
            $historialrecepcion->asignado = $informacion[0];
            $historialrecepcion->ruta_pdf = $nombreArchivo;

            $historialrecepcion->save();
        }



        return $pdf->stream('archivo.pdf');
    }

    public function PDFPreview(Request $request){
        $datosTabla = $request->input('datos');
        $informacion = $request->input('informacion');
        $pdf = PDF::loadView('pdf.PDFEntregaEquipos', ['datosTabla' => $datosTabla], ['informacion' => $informacion]);
        return $pdf->stream('archivo.pdf');
    }
}
