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
                    <td>{{str_replace(",", " ", $historial->nro_inventario)}}</td>
                    <td>{{str_replace(",", " ", $historial->nro_activo_fijo)}}</td>
                    <td>{{str_replace(",", " ", $historial->nro_serie)}}</td>
                    <td>{{str_replace(",", " ", $historial->nombre_equipo)}}</td>
                    <td>{{$historial->asignado}}</td>

                    <td class="d-flex justify-content-center"><a class="bi bi-cloud-arrow-down-fill h1 text-success " href="#"></a></td>
                </tr>


                @endforeach
    </tbody>
</table>
<div>
    {{ $data->links() }}
</div>
