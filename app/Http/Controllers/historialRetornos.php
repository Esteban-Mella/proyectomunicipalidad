<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class historialRetornos extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function obtenerEquiposHistorial(Request $request)
    {
        $historialRetorno = DB::table('historialrecepcion')->orderBy('id', 'desc')->paginate(5);

        return view('historialRetorno', ['historialRetorno'=>$historialRetorno]);
    }
}
