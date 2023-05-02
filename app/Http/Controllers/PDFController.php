<?php

namespace App\Http\Controllers;

use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function PDF(Request $request){
        // Obtener los datos de la tabla enviados por AJAX
        $datosTabla = $request->input('datos');
        $informacion = $request->input('informacion');


        // Generar el PDF usando la vista y los datos
        $pdf = PDF::loadView('pdf.PDFEntregaEquipos', ['datosTabla' => $datosTabla], ['informacion' => $informacion]);

        // Descargar el PDF generado
        return $pdf->stream('miPDF.pdf');
    }
}
