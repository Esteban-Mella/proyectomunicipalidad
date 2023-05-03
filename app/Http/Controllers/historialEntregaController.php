<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class historialEntregaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function obtener(Request $request)
    {
        $historialEntregas = DB::table('historial_entregas')->get();

        return view('historialEntregas', ['historialEntregas'=>$historialEntregas]);
    }
    public function actualizar(Request $request)
    {
        //
    }
}
