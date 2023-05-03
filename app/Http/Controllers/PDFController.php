<?php

namespace App\Http\Controllers;

use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function PDF(Request $request){
        $datosTabla = $request->input('datos');
        $informacion = $request->input('informacion');

        $nombreArchivo ='pdf-'.$informacion[1].'-'.date("d M j G-i-s T Y").'.pdf';
        $rutaGuardado='app/public/documentos/pdf';

        $pdf = PDF::loadView('pdf.PDFEntregaEquipos', ['datosTabla' => $datosTabla], ['informacion' => $informacion]);

        if($informacion[1]=='Entrega'){
            Storage::disk('cargaEntrega')->put($nombreArchivo, $pdf->output());
        }else{
            Storage::disk('cargaRetorno')->put($nombreArchivo, $pdf->output());
        }


        return $pdf->stream('archivo.pdf');
    }
}
