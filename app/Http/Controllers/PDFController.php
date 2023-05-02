<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function PDF(Request $request){
        // Obtener los datos de la tabla enviados por AJAX
        $datosTabla = $request->input('datos');
        $usuarioPrestamo = $request->input('usuarioPrestamo');

        // Generar el PDF usando la vista y los datos
        $pdf = PDF::loadView('pdf.PDFEntregaEquipos', ['datosTabla' => $datosTabla],['usuarioPrestamo' => $usuarioPrestamo]);

        // Descargar el PDF generado
        return $pdf->stream('miPDF.pdf');
    }
}
