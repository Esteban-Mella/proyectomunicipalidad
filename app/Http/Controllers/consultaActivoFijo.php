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
        $equipos = DB::table('historia_activo_fijo')->paginate(10);
        return view('activoFijo', ['equipos'=>$equipos]);
    }
}
