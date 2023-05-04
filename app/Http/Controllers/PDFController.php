<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\historialentregas;
use Psy\CodeCleaner\EmptyArrayDimFetchPass;

class PDFController extends Controller
{
    public function PDF(Request $request){
        $datosTabla = $request->input('datos');
        $informacion = $request->input('informacion');
        $nroInventario = '';
        $nro_activo_fijo = '';
        $nro_serie = '';
        $nombre_equipo = '';
        $rutapdf='';

        $nombreArchivo ='pdf-'.$informacion[1].'-'.date("d M j G-i-s T Y").'.pdf';
        $pdf = PDF::loadView('pdf.PDFEntregaEquipos', ['datosTabla' => $datosTabla], ['informacion' => $informacion]);

        foreach($datosTabla as $fila){
            $nroInventario=$nroInventario.','.$fila[1];
        }



        if ($informacion[1]==='Entrega') {
            Storage::disk('cargaEntrega')->put($nombreArchivo, $pdf->output());
            $historialentregas = new historialentregas;
            $historialentregas->nro_inventario = $nroInventario;
            $historialentregas->save();
        } else {
            Storage::disk('cargaRetorno')->put($nombreArchivo, $pdf->output());
        }



        return $pdf->stream('archivo.pdf');
    }

    public function guardarArchivo(){

    }
}
