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
    public function busquedaHistorialEntregas(Request $request)
    {
        $busqueda = $request->text;
        $data = DB::table('historialentregas')->where('nro_inventario', 'LIKE', '%'.$busqueda.'%')
        ->orwhere('nro_activo_fijo', 'LIKE', '%'.$busqueda.'%')
        ->orwhere('id', 'LIKE', '%'.$busqueda.'%')
        ->orwhere('asignado', 'LIKE', '%'.$busqueda.'%')
        ->orwhere('nro_serie', 'LIKE', '%'.$busqueda.'%')->orderBy('id', 'desc')->paginate(10);

        $view = view('viewResultadoBusquedaHistorial', compact('data'))->render();
        return response()->json($view);
    }
}
