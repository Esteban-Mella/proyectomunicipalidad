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
        $historialRetorno = DB::table('historialrecepcion')->orderBy('id', 'desc')->paginate(10);

        return view('historialRetorno', ['historialRetorno'=>$historialRetorno]);
    }
    public function busquedaHistorialRetorno(Request $request)
    {
        $busqueda = $request->text;
        $data = DB::table('historialrecepcion')->where('nro_inventario', 'LIKE', '%'.$busqueda.'%')
        ->orwhere('nro_activo_fijo', 'LIKE', '%'.$busqueda.'%')
        ->orwhere('id', 'LIKE', '%'.$busqueda.'%')
        ->orwhere('asignado', 'LIKE', '%'.$busqueda.'%')
        ->orwhere('nro_serie', 'LIKE', '%'.$busqueda.'%')->orderBy('id', 'desc')->paginate(10);

        $view = view('viewResultadoBusquedaHistorialRetorno', compact('data'))->render();
        return response()->json($view);
    }
}
