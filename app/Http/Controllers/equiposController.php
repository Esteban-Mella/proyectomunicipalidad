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
        return view('retornoEquipos', ['equipos'=>$equipos], ['usuarios'=>$usuarios]);
    }
    public function equiposDisponibles(Request $request)
    {

        $equipos = DB::table('equipos')->paginate(10);
        return view('consultaEquipos', ['equipos'=>$equipos]);
    }
    public function equiposBusqueda(Request $request)
    {

        $busqueda = $request->text;
        $data = DB::table('equipos')->where('nro_activofijo', 'LIKE', '%'.$busqueda.'%')->paginate(10);
        $view = view('resultadoBusqueda', compact('data'))->render();

        return response()->json($view);



    }
}
