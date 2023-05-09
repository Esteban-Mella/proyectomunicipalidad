<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class consultaActivoFijo extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consultaActivoFijo(Request $request)
    {
        $equipos = DB::table('historial_activo_fijo')->paginate(10);
        return view('activoFijo', ['equipos'=>$equipos]);
    }
    public function historialActivoFijo(Request $request)
    {
        $fecha1 = $request->fecha1;
        $fecha2 = $request->fecha2;

        $data = DB::table('historial_activo_fijo')->whereBetween('updated_at', [$fecha1, $fecha2])->paginate(15);

        $view = view('viewTablaActivoFijo', compact('data'))->render();
        return response()->json($view);
    }
}
