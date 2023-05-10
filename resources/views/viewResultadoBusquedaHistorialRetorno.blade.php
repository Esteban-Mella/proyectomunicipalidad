<table id="historialEquipos" class="table table-striped border rounded-4">

    <thead>
    <tr >
        <th scope="col">id</th>
        <th scope="col">N° de Inventario Equipos</th>
        <th scope="col">N° Activo fijo Equipos</th>
        <th scope="col">N° de serie Equipos</th>
        <th scope="col">Detalle Equipos</th>
        <th scope="col">Asignado</th>
        <th scope="col">Descargar Detalle</th>
    </tr>
    </thead>
    <tbody>

        @foreach ($data as $historial)
                <tr style="max-height: 100px;">
                    <th scope="row">{{$historial->id}}</th>
                    <td>{{ substr(str_replace(",", " ", $historial->nro_inventario),0,15)."..."}}</td>
                    <td>{{ substr(str_replace(",", " ", $historial->nro_activo_fijo),0,15)."..."}}</td>
                    <td>{{ substr(str_replace(",", " ", $historial->nro_serie),0,15)."..."}}</td>
                    <td>{{ substr(str_replace(",", " ", $historial->nombre_equipo),0,15)."..."}}</td>
                    <td>{{$historial->asignado}}</td>

                    <td class="d-flex justify-content-center"><a class="bi bi-cloud-arrow-down-fill h1 text-success " target="_blank" href="{{URL::asset('/storage/documentos/pdf-retorno/'.$historial->ruta_pdf)}}"></a></td>
                        </tr>
                </tr>


                @endforeach
    </tbody>
</table>
<div>
    {{ $data->links() }}
</div>
