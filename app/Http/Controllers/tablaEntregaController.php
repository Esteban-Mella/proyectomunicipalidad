<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tablaEntregaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generarFormEntrega(Request $data)
    {
        dd($data->all());

        return $data;
    }
}
