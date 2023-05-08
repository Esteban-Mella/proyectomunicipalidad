
<table id="formulario-datos" class="formulario-datos table table-striped border rounded-4">

    <thead>
    <tr>
        <th scope="col">id</th>
        <th class="test" scope="col">N° de Inventario</th>
        <th scope="col">N° Activo fijo</th>
        <th scope="col">N° de serie</th>
        <th scope="col">Nombre Equipo</th>
        <th scope="col">Marca Equipo</th>
        <th scope="col">Asignado</th>
        <th scope="col">operativo</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>

        @foreach ($data as $equipo)
        <tr>
            <th scope="row">{{$equipo->id}}</th>
            <td>{{$equipo->nro_inventario}}</td>
            <td>{{$equipo->nro_activofijo}}</td>
            <td>{{$equipo->nro_serie}}</td>
            <td>{{$equipo->tipo_equipo}}</td>
            <td>{{$equipo->marca}}</td>
            <td>{{$equipo->asignado}}</td>
            <td>{{$equipo->operativo}}</td>
            <td>{{-- <button type="button" class="btn btn-success">Añadir</button> --}}
                <a id="agregar-dato" class="bi bi-file-earmark-plus-fill h1 text-success enviar-dato" href="" onclick="obtenerDatos(this)"></a>
            </td>
        </tr>


        @endforeach


    </tbody>
</table>
<div>
    {{ $data->links() }}
</div>

