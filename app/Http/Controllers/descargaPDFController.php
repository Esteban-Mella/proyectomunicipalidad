<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class descargaPDFController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function descarga($file) {


        $url = storage_path('app/'.str_replace('-', '/', $file));
        return Storage::get('storage/documentos/pdf-entrega/'+$url);

    }
}
