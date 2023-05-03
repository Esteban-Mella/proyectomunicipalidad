<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class equiposController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function recuperarEquiposentrega(Request $request)
    {
        $usuarios = DB::table('usuarios')->get();
        $equipos = DB::table('equipos')->paginate(10);

        return view('entregaEquipos', ['equipos'=>$equipos], ['usuarios'=>$usuarios]);
    }
    public function recuperarEquiposretorno(Request $request)
    {
        $usuarios = DB::table('usuarios')->get();
        $equipos = DB::table('equipos')->paginate(10);

        return view('entregaEquipos', ['equipos'=>$equipos], ['usuarios'=>$usuarios]);
    }
}
