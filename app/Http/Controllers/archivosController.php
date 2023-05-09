<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class archivosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function archivosHistorialEntrega(Request $request)
    {
        return Storage::download('storage/curriculum.pdf');
    }
}
