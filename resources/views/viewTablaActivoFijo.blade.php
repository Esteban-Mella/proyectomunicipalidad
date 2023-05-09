<table id="tablaActivoFijo" class="table table-striped border rounded-4">

    <thead>
    <tr >
        <th scope="col">id</th>
        <th scope="col">N° de serie Equipos</th>
        <th scope="col">N° Activo fijo Equipos</th>
        <th scope="col">N° de Inventario Equipos</th>
        <th scope="col">Marcado como no operativo</th>
        <th scope="col">Fecha</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($data as $historial)
                <tr style="max-height: 100px;">
                    <th scope="row">{{$historial->id}}</th>
                    <td>{{$historial->nro_serie}}</td>
                    <td>{{$historial->nro_activo_fijo}}</td>
                    <td>{{$historial->nro_inventario}}</td>
                    <td>{{$historial->marcado_no_operativo}}</td>
                    <td>{{$historial->created_at}}</td>
                </tr>
        @endforeach

    </tbody>
</table>
<div>
    {{ $data->links() }}
</div>
