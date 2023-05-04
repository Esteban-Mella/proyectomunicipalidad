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
    public function obtenerEquiposHistorial(Request $request)
    {
        $historialEntregas = DB::table('historialentregas')->orderBy('id', 'desc')->paginate(10);

        return view('historialEntregas', ['historialEntregas'=>$historialEntregas]);
    }
    public function actualizar(Request $request)
    {
        //
    }
}
