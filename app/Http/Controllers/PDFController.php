<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function PDF(){
        $pdf =\PDF::loadView('/pdf.PDFEntregaEquipos');
        return $pdf->download('Certificado Entrega '.now().'.pdf');
    }
}
